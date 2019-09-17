<!DOCTYPE html>
<html>
<head>
    <title>No Modal Demo</title>
    <?php include_once('scripts/headTags.php') ?>


    <link href="../wizard.css" rel="stylesheet" />

</head>
<body>

    <!-- Begin wizard -->
    <div class="wizard" id="wizard">

        <div class="wizard-step" data-title="Step One">
            This is step one
        </div>

        <div class="wizard-step" data-title="Step Two">
            This is step two
        </div>

        <div class="wizard-step" data-title="Step Three">
            This is step three
        </div>

    </div>
    <!-- End wizard -->

    <?php include_once('scripts/bottomScripts.php') ?>

    <script type="text/javascript" src="js/wizard.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            // initialize wizard
            $('#wizard').wizard({
                isModal: false,
                autoOpen: true
            });

        });
    </script>

</body>
</html>
