const params = new URLSearchParams(window.location.search);
const dir = params.get("dir");

const repoOwner = "R2R-2";
const repoName = "format";

if (dir) {
    const apiURL = `https://api.github.com/repos/${repoOwner}/${repoName}/contents/${dir}`;

    fetch(apiURL)
        .then(res => res.json())
        .then(files => {
            const list = document.getElementById("file-list");

            files.forEach(file => {
                if (file.type === "file") {
                    const li = document.createElement("li");
                    const a = document.createElement("a");

                    a.href = file.download_url;
                    a.textContent = file.name;

                    li.appendChild(a);
                    list.appendChild(li);
                }
            });
        });
}