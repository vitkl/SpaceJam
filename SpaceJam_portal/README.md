![alt text](https://github.com/vitkl/SpaceJam/blob/main/logos/spacejam_mini.png)
# Summary
This directory contains open-source code and template files to create a simple portal viewer by combining multiple published and internally developed tools for the Kidney Nanostring data.
(http://nanostring-public-share.s3-website-us-west-2.amazonaws.com/GeoScriptHub/KidneyDataset/)

Visit our interactive poatl for analysis and data exploration here: https://www.spacejam.tech/

## Feature list
    
    Static apps:
        - Plotly Boxplots comparing predicted celltype abundances across methods
        - Plotly Sankey plots describing predicted celltype interactions filtered for meaningful interactions using both predicted celltype anbundance and GEOMX data output.
        
    Integrated apps:
        - Interactive multi_variable celltype density and gene expression dotplot/heatmap (This tool is generated from the "interactive heatmap" script and displays an interactive heatmap. Users may define what categorical variable to view the data by and plot either celltype abundance (e.g per ROI) or mean gene expression)
        -  Functional enrichment annotation broswer (inactive) - (Displays functional enriched geneset modules as a javascript graph) 

    Main content app:
        - Categorical selector allows users to select defined categories of interest (e.g Disease/healthy) and subsequently displays relevant data for each category upon selection (e.g donor/slides)
        - Histology viewer automatically loads an overview histology slide (pyramidal image) and display it to the user. This module allows users to pan, zoom and annotate each section with subsequent ability to save this image for reference. Future updates will allow users to directly select ROI of interest by mouse-click events.
        - ROI viewer automatically displays the ROI set for each categorical varaible selected. This content zooms over the page to give users a better experience, the lightbox gallery used allows users to double click to zoom adn click to pan around images.
        - The metadata viewer is a zoomable element which allows user to interactively view and search metadata on the go. User can for example paste the name of an ROI image and get the resulting metadata information including relative celltype densities or cartersian coordinates.

## Main_template
The main template folder contains template foolder structure and neccesary files for each tool written in php, HTML, javascript and CSS. 

## Notebooks
Includes tools used to populate each subdirectory of the portal structure.


### Future work:
- Browser compatibility: This portal tool is in early development and can be unstable on certain platforms, for best performance, we recommend viewing the pot on Chrome browsers.
- Hook to show ROI statistics when an ROI is selected.
- Improved tool integration (auto update of metadata)
- Allow user to select ROI by highlighting on the overall histology map

### Known Issues:
- Browser compatibility issues observed with IE versions < 8.0
- Occasional erros with autoscale on histology sections causes them to appear very small

Visit our portal here:  (https://www.spacejam.tech/)
![alt text](https://github.com/vitkl/SpaceJam/blob/main/logos/Screenshot%202021-05-03%20at%2022.04.00.png)
