#!/bin/bash

# Loop through every directory in the current location
for dir in */; do
    # Remove the trailing slash for the database query
    dir_name="${dir%/}"

    # 1. Skip if header.html already exists
    if [ -f "${dir_name}/header.html" ]; then
        echo "Skipping '$dir_name': header.html already exists."
        continue
    fi

    # 2. Query the database using the psql alias
    # -t: tuples only, -A: unaligned (removes extra whitespace)
    result=$(psql -t -A -c "SELECT name FROM fileformat WHERE id='$dir_name';")

    # 3. If a row is returned, create the file
    if [ -n "$result" ]; then
        echo "Creating header for '$dir_name' with name: $result"
        
        cat <<EOF > "${dir_name}/header.html"
<div>
  <h2>$result</h2>
</div>
EOF
    else
        echo "No database record for '$dir_name'. Skipping."
    fi
done

echo "Process complete."
