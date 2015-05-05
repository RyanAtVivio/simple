<html>
<head>
    <!-- ... -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
<body>

<div class="container">

    <?php
    function eot($str){
        return "<pre><code>". htmlentities($str)."</code></pre>";
    }
    ?>

    <div class="row">
        <div class="col-sm-6 col-offset-6">
            <h1>SIMPLE</h1>
            <p>This is about the simplest page possible</p>
            <h2>datetimepicker</h2>
        </div>
    </div>

    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php $eot1=<<<'EOT'
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
EOT;
            ?>
            <?= eot($eot1) ?>
        </div>
    </div>

    <section id="table-section">
        <h2>table</h2>
        <pre><code><?= htmlentities('<table class="table table-striped table-hover">') ?></code></pre>
        <div class="cd-box">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>bam</th>
                    <th>bam</th>
                    <th>bam</th>
                    <th>bam</th>
                    <th>bam</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                </tr>
                <tr>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                </tr>
                <tr>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                    <td>bam</td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>

    <p>We are in search of one or more developers with specific experience in the PhoneGap (Cordova) platform and Angular.</p>
    <p>Here's an excerpt from our planning documentation.  As you can see, we have several specific needs for this project:</p>
    <h4>Non-Functional requirements</h4>
    <ul>
        <li>iPhone or Android compatible</li>
        <li>Utilize HTML5, CSS3, JavaScript Cordova / PhoneGap, AngularJS, onsen.io (UI)</li>
        <li>Utilize Weather API, Google Maps and Device GPS</li>
        <li>Core functionality must operate without an internet connection.</li>
    </ul>
    <p>This will be a fun project that will look great on your resume.  We demand excellent communication and high-quality code... </p>
    <p>Will we consider someone without PhoneGap experience?  Maybe, but be aware that PhoneGap is it's own animal.  You will have to demonstate a <i>very</i> high proficiency in HTML, CSS, and Javascript, and be able to set up your own environment and such.</p>
    <p>We use JIRA Agile for project management: experience is a plus, but not required.</p>

    <a href="http://www.viviosoft.com">http://www.viviosoft.com</a>

</div>

</body>
</html>
