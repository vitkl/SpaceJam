<!doctype html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]--><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Cytoscape Session Viewer</title><meta name="description" content="Viewer for JSON files exported from Cytoscape 3"><meta name="viewport" content="width=device-width, initial-scale=1"><!-- Place favicon.ico and apple-touch-icon.png in the root directory --><link rel="stylesheet" href="styles/dc4be20e.vendor.css"><link rel="stylesheet" href="styles/dcab8a36.main.css"><body ng-app="cyViewerApp"><!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please
          <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--><!-- Add your site or application content here --><div class="main" ng-view=""></div><!--[if lt IE 9]>
    <script src="bower_components/es5-shim/es5-shim.js"></script>
    <script src="bower_components/json3/lib/json3.min.js"></script>
    <![endif]-->
    

    <script type="text/ng-template" id="main.html">
    	
    
    

    <div id="network" ng-style="{'background-color': bg.color}"></div><div class="loading"><span us-spinner="{radius:30, width:3, length: 100}"></span></div><div class="summary" ng-show="overlayState.show"><h3>Gene interaction networks for top 10 interactions with Stringdb confidence score >0.9 </h3><h3>Network:</h3><select class="form-control" id="network-selector" ng-options="networkName for networkName in networkNames" ng-change="switchNetwork()" ng-model="currentNetwork"></select><h3>Visual Style:</h3><select class="form-control" id="vs-selector" ng-options="styleName for styleName in visualStyleNames" ng-change="switchVS()" ng-model="currentVS"></select><h3>Layout:</h3><select class="form-control" id="layout-selector" ng-options="layoutName for layoutName in LAYOUTS" ng-change="switchLayout()" ng-model="currentLayout"></select><h3>Tips:</h3><h3>Click and hold for >1 Second to drag network</h3><h3>Set a new layout to reset view</h3><h3>Set Visual style to EM3_Visual_Style for path names</h3></div><div ng-show="browserState.show" class="table-browser"><div id="table-view"><tabset justified="true"><tab heading="Node"><table class="table table-striped table-bordered table-hover"><thead><tr><td>SUID<td ng-repeat="columnName in columnNames">{{columnName}}<tbody data-ng-repeat="node in selectedNodes"><tr><td>{{ node.id() }}<td ng-repeat="colName in columnNames">{{node.data(colName)}}</table></tab><tab heading="Edge"><table class="table table-striped table-bordered table-hover"><thead><tr><td>SUID<td ng-repeat="columnName in edgeColumnNames">{{columnName}}<tbody data-ng-repeat="edge in selectedEdges"><tr><td>{{ edge.id() }}<td ng-repeat="colName in edgeColumnNames">{{edge.data(colName)}}</table></tab></tabset></div></div><div class="home-button" ng-click="toggleToolbar()" style="clear:both" tooltip-placement="left" tooltip="Show/Hide Toolbar"><span class="glyphicon glyphicon-sort"></span></div><div class="command-bar" ng-show="toolbarState.show"><div class="icon-button" ng-click="toggleTableBrowser()" tooltip-placement="left" tooltip="Show/Hide Table"><span class="glyphicon glyphicon-list-alt"></span></div><div class="icon-button" ng-click="toggleOverlay()" tooltip-placement="left" tooltip="Show/Hide Selector"><span class="glyphicon glyphicon-info-sign"></span></div><div class="icon-button" ng-click="fit()" tooltip-placement="left" tooltip="Fit to window"><span class="glyphicon glyphicon-resize-full"></span></div><div class="icon-button" colorpicker="" colorpicker-position="left" ng-model="bg.color" tooltip-placement="left" tooltip="Set Background Color"><span class="glyphicon glyphicon-tint"></span></div></div>
    </script>

    <script src="data/networks.js"> </script>
    <script src="data/styles.js"> </script>


    <script src="scripts/65d77273.vendor.js"></script>
    <script src="scripts/1d327552.scripts.js"></script>
    <script src="scripts/custom.js"></script>
           