<?php
  require 'required.php';
?>  
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="icon" href="assets/img/logo.png">
    <title>TELERADIO - Dicom</title>


    <link href="utils/cornerstone.min.css" rel="stylesheet">
</head>
<body style="background-color: #252525;">
    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Topbar
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <nav class="topbar topbar-expand-md topbar-nav-centered topbar-inverse topbar-sticky">
      <div class="container">
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="index.php"> <img class="logo-default" src="assets/img/logo.png" alt="logo"> <img class="logo-inverse" src="assets/img/logo.png" alt="logo"> </a>
        </div>
        <div class="topbar-right"> <a class="btn btn-sm btn-danger mr-4" href="logout.php">Se deconnecter</a> </div>
      </div>
    </nav>
    <!---- END topbar---->
    <!-- Header -->
    <header class="header header-inverse h-fullscreen">
      <div class="header-overlay opacity-90" style="background-color: #fffffFF"></div>
      <div class="container text-center">
        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">
            <h5 class="display-4">Visualiseur Dicom</h5> </div>
        </div>
      </div>
    </header>
    <!-- END Header -->

<div class="container">
    <div id="loadProgress">Image Load Progress:</div>

    <div class="row">
        <form id="form" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-3">
                    <input type="file" id="selectFile" >
                </div>
            </div>
        </form>
    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <div style="width:512px;height:512px;position:relative;color: white;display:inline-block;border-style:solid;border-color:black;"
                 oncontextmenu="return false"
                 class='disable-selection noIbar'
                 unselectable='on'
                 onselectstart='return false;'
                 onmousedown='return false;'>
                <div id="dicomImage"
                     style="width:512px;height:512px;top:0px;left:0px; position:absolute">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <span style="color: Whitesmoke;">Transfer Syntax: </span><span style="color: Whitesmoke;" id="transferSyntax"></span><br>
            <span style="color: Whitesmoke;">SOP Class: </span><span style="color: Whitesmoke;" id="sopClass"></span><br>
            <span style="color: Whitesmoke;">Samples Per Pixel: </span><span style="color: Whitesmoke;" id="samplesPerPixel"></span><br>
            <span style="color: Whitesmoke;">Photometric Interpretation: </span><span style="color: Whitesmoke;" id="photometricInterpretation"></span><br>
            <span style="color: Whitesmoke;">Number Of Frames: </span><span style="color: Whitesmoke;" id="numberOfFrames"></span><br>
            <span style="color: Whitesmoke;">Planar Configuration: </span><span style="color: Whitesmoke;" id="planarConfiguration"></span><br>
            <span style="color: Whitesmoke;">Rows: </span><span style="color: Whitesmoke;" id="rows"></span><br>
            <span style="color: Whitesmoke;">Columns: </span><span style="color: Whitesmoke;" id="columns"></span><br>
            <span style="color: Whitesmoke;">Pixel Spacing: </span><span style="color: Whitesmoke;" id="pixelSpacing"></span><br>
            <span style="color: Whitesmoke;">Bits Allocated: </span><span style="color: Whitesmoke;" id="bitsAllocated"></span><br>
            <span style="color: Whitesmoke;">Bits Stored: </span><span style="color: Whitesmoke;" id="bitsStored"></span><br>
            <span style="color: Whitesmoke;">High Bit: </span><span style="color: Whitesmoke;" id="highBit"></span><br>
            <span style="color: Whitesmoke;">Pixel Representation: </span><span style="color: Whitesmoke;" id="pixelRepresentation"></span><br>
            <span style="color: Whitesmoke;">WindowCenter: </span><span style="color: Whitesmoke;" id="windowCenter"></span><br>
            <span style="color: Whitesmoke;">WindowWidth: </span><span style="color: Whitesmoke;" id="windowWidth"></span><br>
            <span style="color: Whitesmoke;">RescaleIntercept: </span><span style="color: Whitesmoke;" id="rescaleIntercept"></span><br>
            <span style="color: Whitesmoke;">RescaleSlope: </span><span style="color: Whitesmoke;" id="rescaleSlope"></span><br>
            <span style="color: Whitesmoke;">Basic Offset Table Entries: </span><span style="color: Whitesmoke;" id="basicOffsetTable"></span><br>
            <span style="color: Whitesmoke;">Fragments: </span><span style="color: Whitesmoke;" id="fragments"></span><br>
            <span style="color: Whitesmoke;">Min Stored Pixel Value: </span><span style="color: Whitesmoke;" id="minStoredPixelValue"></span><br>
            <span style="color: Whitesmoke;">Max Stored Pixel Value: </span><span style="color: Whitesmoke;" id="maxStoredPixelValue"></span><br>
            <span style="color: Whitesmoke;">Total Time: </span><span style="color: Whitesmoke;" id="totalTime"></span><br>
            <span style="color: Whitesmoke;">Load Time: </span><span style="color: Whitesmoke;" id="loadTime"></span><br>
            <span style="color: Whitesmoke;">Decode Time: </span><span style="color: Whitesmoke;" id="decodeTime"></span><br>

        </div>
    </div>
</div>
</body>


<!-- include the cornerstone library -->
<script src="utils/cornerstone.min.js"></script>
<SCRIPT src="utils/cornerstoneMath.min.js"></SCRIPT>
<SCRIPT src="utils/cornerstoneTools.min.js"></SCRIPT>

<!-- include the dicomParser library as the WADO image loader depends on it -->
<script src="utils/dicomParser.min.js"></script>

<!-- uids -->
<script src="utils/uids.js"></script>

<!-- Lines ONLY required for this example to run without building the project -->
<script>window.cornerstoneWADOImageLoader || document.write('<script src="https://unpkg.com/cornerstone-wado-image-loader">\x3C/script>')</script>
<script src="utils/initializeWebWorkers.js"></script>

<script>
    cornerstoneWADOImageLoader.external.cornerstone = cornerstone;

    // this function gets called once the user drops the file onto the div
    function handleFileSelect(evt) {
        evt.stopPropagation();
        evt.preventDefault();

        // Get the FileList object that contains the list of files that were dropped
        const files = evt.dataTransfer.files;

        // this UI is only built for a single file so just dump the first one
        file = files[0];
        const imageId = cornerstoneWADOImageLoader.wadouri.fileManager.add(file);
        loadAndViewImage(imageId);
    }

    function handleDragOver(evt) {
        evt.stopPropagation();
        evt.preventDefault();
        evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
    }

    // Setup the dnd listeners.
    const dropZone = document.getElementById('dicomImage');
    dropZone.addEventListener('dragover', handleDragOver, false);
    dropZone.addEventListener('drop', handleFileSelect, false);


    cornerstoneWADOImageLoader.configure({
        beforeSend: function(xhr) {
            // Add custom headers here (e.g. auth tokens)
            //xhr.setRequestHeader('x-auth-token', 'my auth token');
        },
        useWebWorkers: true,
    });

    let loaded = false;

    function loadAndViewImage(imageId) {
        const element = document.getElementById('dicomImage');
        const start = new Date().getTime();
        cornerstone.loadImage(imageId).then(function(image) {
            console.log(image);
            const viewport = cornerstone.getDefaultViewportForImage(element, image);
            cornerstone.displayImage(element, image, viewport);
            if(loaded === false) {
                cornerstoneTools.mouseInput.enable(element);
                cornerstoneTools.mouseWheelInput.enable(element);
                cornerstoneTools.wwwc.activate(element, 1); // ww/wc is the default tool for left mouse button
                cornerstoneTools.pan.activate(element, 2); // pan is the default tool for middle mouse button
                cornerstoneTools.zoom.activate(element, 4); // zoom is the default tool for right mouse button
                cornerstoneTools.zoomWheel.activate(element); // zoom is the default tool for middle mouse wheel

                cornerstoneTools.imageStats.enable(element);
                loaded = true;
            }

            function getTransferSyntax() {
                const value = image.data.string('x00020010');
                return value + ' [' + uids[value] + ']';
            }

            function getSopClass() {
                const value = image.data.string('x00080016');
                return value + ' [' + uids[value] + ']';
            }

            function getPixelRepresentation() {
                const value = image.data.uint16('x00280103');
                if(value === undefined) {
                    return;
                }
                return value + (value === 0 ? ' (unsigned)' : ' (signed)');
            }

            function getPlanarConfiguration() {
                const value = image.data.uint16('x00280006');
                if(value === undefined) {
                    return;
                }
                return value + (value === 0 ? ' (pixel)' : ' (plane)');
            }

            document.getElementById('transferSyntax').textContent = getTransferSyntax();
            document.getElementById('sopClass').textContent = getSopClass();
            document.getElementById('samplesPerPixel').textContent = image.data.uint16('x00280002');
            document.getElementById('photometricInterpretation').textContent = image.data.string('x00280004');
            document.getElementById('numberOfFrames').textContent = image.data.string('x00280008');
            document.getElementById('planarConfiguration').textContent = getPlanarConfiguration();
            document.getElementById('rows').textContent = image.data.uint16('x00280010');
            document.getElementById('columns').textContent = image.data.uint16('x00280011');
            document.getElementById('pixelSpacing').textContent = image.data.string('x00280030');
            document.getElementById('bitsAllocated').textContent = image.data.uint16('x00280100');
            document.getElementById('bitsStored').textContent = image.data.uint16('x00280101');
            document.getElementById('highBit').textContent = image.data.uint16('x00280102');
            document.getElementById('pixelRepresentation').textContent = getPixelRepresentation();
            document.getElementById('windowCenter').textContent = image.data.string('x00281050');
            document.getElementById('windowWidth').textContent = image.data.string('x00281051');
            document.getElementById('rescaleIntercept').textContent = image.data.string('x00281052');
            document.getElementById('rescaleSlope').textContent = image.data.string('x00281053');
            document.getElementById('basicOffsetTable').textContent = image.data.elements.x7fe00010 && image.data.elements.x7fe00010.basicOffsetTable ? image.data.elements.x7fe00010.basicOffsetTable.length : '';
            document.getElementById('fragments').textContent = image.data.elements.x7fe00010 && image.data.elements.x7fe00010.fragments ? image.data.elements.x7fe00010.fragments.length : '';
            document.getElementById('minStoredPixelValue').textContent = image.minPixelValue;
            document.getElementById('maxStoredPixelValue').textContent = image.maxPixelValue;
            const end = new Date().getTime();
            const time = end - start;
            document.getElementById('totalTime').textContent = time + "ms";
            document.getElementById('loadTime').textContent = image.loadTimeInMS + "ms";
            document.getElementById('decodeTime').textContent = image.decodeTimeInMS + "ms";

        }, function(err) {
            alert(err);
        });
    }

    cornerstone.events.addEventListener('cornerstoneimageloadprogress', function(event) {
        const eventData = event.detail;
        const loadProgress = document.getElementById('loadProgress');
        loadProgress.textContent = `Image Load Progress: ${eventData.percentComplete}%`;
    });

    const element = document.getElementById('dicomImage');
    cornerstone.enable(element);

    document.getElementById('selectFile').addEventListener('change', function(e) {
        // Add the file to the cornerstoneFileImageLoader and get unique
        // number for that file
        const file = e.target.files[0];
        const imageId = cornerstoneWADOImageLoader.wadouri.fileManager.add(file);
        loadAndViewImage(imageId);
    });




    document.getElementById('toggleCollapseInfo').addEventListener('click', function() {
        if (document.getElementById('collapseInfo').style.display === 'none') {
            document.getElementById('collapseInfo').style.display = 'block';
        } else {
            document.getElementById('collapseInfo').style.display = 'none';
        }
    });
</script>
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
