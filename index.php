<html>

<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.cleditor.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery.cleditor.min.js"></script>

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

<!--------   Drag menu -------->
    <div class="left">
        <div class="info">
            <center>MENU - Drag n Drop</center>
        </div>
        <ul class="tools">
            <li id="table" class="draggable">Table</li>
            <li id="text" class="draggable">Text</li>
            <li id="image" class="draggable">Image</li>
            <li id="para" class="draggable">Paragraph</li>

        </ul>
        <br></br>
        <center>
            <input type="button" class="button" value="Edit" id="edit">
        </center>


    </div>

    <!--------   Droppable area -------->
    <div class="right">
        <div id="main-droppable" class="droppable"></div>

    </div>

    <!--------   Table add form dialogue -------->
    <div id="table-add-form">
    <table>
        <tr>
            <td>Rows:</td>
            <td>
                <input type="text" name="row" id="row" value="3">
            </td>
        </tr>
        <tr>
            <td>Cols:</td>
            <td>
                <input type="text" name="col" id="col" value="3">
            </td>
        </tr>
        <tr>
            <td>Width:</td>
            <td>
                <input type="text" name="tbl-width" id="tbl-width" value="300">
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

<!--------   Td Editor Main dialogue -------->
    <div id="td-edit-form-main" style="width:250px!important;padding: 12px 0 0 36px;">
    <table>
        <tr>
            <td>
                <input type="button" name="Delete" id="td-delete" value="Delete" style="width:75px;padding: 3px;margin: 15px;">
            </td>
            <td>
                <input type="button" name="Edit" id="td-edit" value="Edit" style="width:75px;padding: 3px;margin: 15px;">
            </td>
        </tr>
 </table>

<!--------   Td Editor dialogue -------->
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

    <!--------   Output html dialogue -------->
<div id="output_div">
    <textarea id="output-text"></textarea>
</div>

<!--------   Text Editor dialogue -------->
<div id="text-editor-form">
    <textarea id="input-text" name="input-text"></textarea>
    <input type="button" name="add-text" id="add-text-btn" value="Insert">
</div>

<!--     Hidden fields ( Data holders) -------->
<input type="hidden" name="destintion-field" id="destintion-field" value="">
<input type="hidden" name="selected-td-id" id="selected-td-id" value="">
</body>

</html>