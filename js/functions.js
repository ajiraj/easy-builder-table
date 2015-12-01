/*********************************************************/
/***      Easy builder functions V.1.0  AjiRaj   *********/  
/*********************************************************/

  $(function() {
      var clone;
      $(".draggable").draggable({
          helper: 'clone',
          cursor: 'hand',
          revert: true

      });

      make_dropables();

      $('#table-add').click(function() {
          var row = $("#row").val();
          var col = $("#col").val();
          var id = $("#destintion-field").val();
          var width = $("#tbl-width").val();
          //console.log(id,row,col,width);
          draw_table(id, row, col, width);
          make_dropables();
          make_td_clickable();
          $('#table-add-form').dialog('close')
              //make_deletable();
      });

      $('#td-change').click(function() {
          var col_span = $("#col-span").val();
          var color = $("#color").val();
          var id = $("#selected-td-id").val();
          var width = $("#td-width").val();
          console.log(id, col_span, color);
          $("#" + id).attr('colspan', col_span);
          $("#" + id).css({
              "background-color": color
          })

          $('#td-edit-form').dialog('close');
      });
      $('#edit').click(function() {

          if ($(this).val() == 'Edit') {
              $('#edit').val('Save');
              make_deletable();
          } else {
              $('table').unbind('mouseenter mouseleave');
              $('#edit').val('Edit');
          }
      });

      $('#get-html').click(function() {

          var bak = $("#main-droppable");
          $(bak).find('table').removeAttr("class").removeAttr("id");
          $(bak).find('td').removeAttr("class").removeAttr("id");
          $(bak).find('div').removeAttr("class").removeAttr("style");
          $("#output-text").html($(bak).html());
          $("#output_div").dialog({
              width: 750
          });


      });
  });

  function make_dropables() {
      $('.droppable').droppable({
          drop: handleDropEvent,
      });

  }

  function make_td_clickable() {
      $('td').click(function() {
          $('td').removeClass('highlight');
          $(this).addClass('highlight');
          var idz = $(this).attr('id');
          $("#selected-td-id").val(idz);
          $("#td-edit-form").dialog();
      });
  }

  function make_deletable() {

      $('table').hover(function() { //this is fired when the mouse hovers over


              $(this).addClass('delete');
              d = document.createElement('div');
              d.className = "del_btn";
              d.style.width = $(this).width() + 5;

              inner_d = document.createElement('div');
              inner_d.className = "del_link";

              $(this).wrap(d);
              $('.del_btn').append(inner_d);
          },
          function() { //this is fired when the mouse hovers out
              $(this).removeClass('delete');
              $('.del_link').empty();
              $('.del_link').remove();
              $(this).unwrap();
          });

      $('.del_link').click(function() {
          var id = $(this).id;
          console.log('id-', id);

          //$('#'+id).remove();

      });

  }

  function make_resizable(selector) {
      $(selector).resizable();
  }

/*** What happens when an element is placed **/

  function handleDropEvent(event, ui) {
      var draggable = ui.draggable.attr('id');
      var droppable = $(this).attr('id');
      switch (draggable) {
			case 'table':
						  make_table_in(droppable);
						  break;
      }
  }

/*** Table drawing function called here **/
  
  function make_table_in(droppable) {
    
      $("#destintion-field").val(droppable);
      $("#table-add-form").dialog();
  }

  
/*** Table drawing function  **/
  
  function draw_table(id, row, col, width) {
      var tablearea = document.getElementById(id),
          table = document.createElement('table');
      table.border = 1;
      table.cellpadding = 0;
      table.cellspacing = 0;
      table.width = width;
      var tbl_id = "tbl_" + Math.random().toString().substr(3, 4) + (new Date()).getTime();
      table.id = tbl_id;
      table.style.height = width;
      for (var i = 1; i <= row; i++) {
          var tr = document.createElement('tr');
          for (var j = 1; j <= col; j++) {
              td = document.createElement('td');
              td.id = "tbl_td" + Math.random().toString().substr(3, 4) + (new Date()).getTime();
              td.className = "droppable";
              tr.appendChild(td);
          }
          table.appendChild(tr);
      }

      tablearea.appendChild(table);
      make_resizable("#" + tbl_id);
      make_resizable("#" + tbl_id + " td");

  }