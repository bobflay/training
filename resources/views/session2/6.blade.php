<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="/files/bulma.css">

</head>
<body>


    <div id="root" class="container">
    	
        <tabs>
            <tab name="About US" :selected="true">
                <h1>Here's the content of the about us tab</h1>
            </tab>

            <tab name="About Our Culture">
                <h1>Here's the content of the about our culture tab</h1>
            </tab>

            <tab name="About Our vision">
                <h1>Here's the content of the about our vision tab</h1>
            </tab>

        </tabs>


    </div>


    <script src="/files/vue.js"></script>
    <script src="/files/main5.js"></script>
</body>
</html>