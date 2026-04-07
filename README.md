# File Format Description Hosting Service

This tool hosts format description documents and serves them with github pages. All format description documents are either noncopyrighted or used with permission from the owner. There's only one endpoint here: the index.html which you call by just using the github pages url: `https://r2r-2.github.io/format`. Specify the fileformat id with the `?dir` query parameter. 

Example calls:
* https://r2r-2.github.io/format/?dir=100039
* https://r2r-2.github.io/format/?dir=100536&primary=WinRiver_User_Guide_International_Version.pdf

The script will use the dir value to locate the files under the correct matching directory name. If the directory contains a `header.html` file then it's contents will be injected above the list of files.
