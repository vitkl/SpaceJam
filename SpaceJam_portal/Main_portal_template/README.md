# Main portal template
Contains the template to build and host the spacejam portal.

#### Index.php
- This contains the main content holder of the web app

#### wc_selector
- This contains self-contained html files which are served to the "wc-selector" element and serve to populate the histology overview section of this webapp. 

#### DR_plots
- this directory contains any apps that should be inserted into the "visualisation app" element. Elements that belong to the "ROI" element and have associated wc_selector idnetities, should go into the "category" sub-directory. All other apps should go into the "./DR_plots/"

#### Meta_info
- This directory contains metadata information that is served to the "metadata widget". Metadata should be supplied into the "./meta_info/metadata" subdirectory.
