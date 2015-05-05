<html>
<head>
    <!-- ... -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <style>
        #userTable{

        }
    </style>
</head>
<body>

<h1>SIMPLE</h1>
<p>This is about the simplest page possible</p>
<h2>table test</h2>
<p>This page demonstrates a table with some buttons in the last column.</p>
<div class="container">
    
    <table class="table table-striped" id="userTable">
        <thead></thead>
        <tbody>
        <tr>
            <th>Foo</th>
            <th>Bar</th>
            <th>Baz</th>
            <th>more</th>
            <th>more</th>
            <th>more</th>
            <th>more</th>
            <th>more</th>
            <th>more</th>
            <th>more</th>
            <th>
                <ul class="nav nav-stacked">
                    <li>
                        <input class="btn btn-xs btn-primary" type="button" value="this button has long text"/>
                    </li>
                    <li>
                        <input class="btn btn-xs" type="button" value="this button has different text"/>
                    </li>
                    <li>
                        <input class="btn btn-xs" type="button" value="this button has even more text"/>
                    </li>
                </ul>

            </th>
        </tr>
        <?php for($i=0;$i<10;$i++): ?>
            <tr>
                <td>Foo</td>
                <td>Bar</td>
                <td>Baz</td>
                <td>more</td>
                <td>more</td>
                <td>Lorem ipsum dolor sit amet, consectetur.</td>
                <td>more</td>
                <td>more</td>
                <td>more</td>
                <td>more</td>
                <td>
                    <input class="btn btn-xs btn-default" type="button" value="edit"/>
                    <input class="btn btn-xs" type="button" value="activate"/>
                    <input class="btn btn-xs" type="button" value="deactivate"/>
                </td>
            </tr>
        <?php endfor; ?>

        </tbody>
    </table>

</div>

</body>
</html>
