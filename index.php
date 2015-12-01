<html>

<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/functions.js"></script>
</head>

<body>

    <div class="head">
        <p>
            <center> <b>Easy Builder </b>
            </center>
        </p>
        <p>
            <center> Table builder for Email signature</center>
        </p>
        <input style="float:right;" type="button" name="add" id="get-html" value="Get HTML">
    </div>
    <div class="left">
        <div class="info">
            <center>MENU - Drag n Drop</center>
        </div>
        <ul class="tools">
            <li id="table" class="draggable">Table</li>
            <li id="para" class="draggable">Paragraph</li>
            <li id="text" class="draggable">Text</li>
            <li id="image" class="draggable">Image</li>
        </ul>
        <br></br>
        <center>
            <input type="button" class="button" value="Edit" id="edit">
        </center>


    </div>

    <div class="right">
        <div id="main-droppable" class="droppable"></div>

    </div>
</body>

</html>
<div id="table-add-form">
    <table>
        <tr>
            <td>Rows:</td>
            <td>
                <input type="text" name="row" id="row">
            </td>
        </tr>
        <tr>
            <td>Cols:</td>
            <td>
                <input type="text" name="col" id="col">
            </td>
        </tr>
        <tr>
            <td>Width:</td>
            <td>
                <input type="text" name="tbl-width" id="tbl-width">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="button" name="add" id="table-add" value="create">
            </td>
        </tr>
    </table>
</div>


<div id="td-edit-form">
    <table>
        <tr>
            <td>col span:</td>
            <td>
                <input type="text" name="col-span" id="col-span">
            </td>
        </tr>
        <tr>
            <td>Color:</td>
            <td>
                <input type="color" name="color" id="color" value="#ffffff">
            </td>
        </tr>
        <tr>
            <td>Width:</td>
            <td>
                <input type="text" name="td-width" id="td-width">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="button" name="add" id="td-change" value="Change">
            </td>
        </tr>
    </table>
</div>
<div id="output_div">
    <textarea id="output-text"></textarea>
</div>

<input type="hidden" name="destintion-field" id="destintion-field" value="">
<input type="hidden" name="selected-td-id" id="selected-td-id" value="">