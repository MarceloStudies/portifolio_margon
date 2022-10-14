$(document).ready(function () {
    // Adiciona item
  
    $(".add").on("click", function () {
      var countClass = $("#countClass").val();
      var content = $(".contentIncrement");
      var html = "";
      countClass = parseInt(countClass);
      var count = countClass;
  
    html+='  <div class="row" id="contentClass0">';
    html+='  <div class="col-md-6">';
    html+='    <div class="form-group">';
    html+='      <label for="example-text-input" class="form-control-label">Name School</label>';
    html+='      <input id="nameschool' + count + '" class="form-control" type="text" name="nameschool[]" value="" data-index="' + count + '">';
    html+='    </div>';
    html+='  </div>';
    html+='  <div class="col-md-6">';
    html+='    <div class="form-group">';
    html+='      <label for="example-text-input" class="form-control-label">Adress</label>';
    html+='      <input id="adress' + count + '" class="form-control" type="text" name="adress[]" value="" data-index="' + count + '">';
    html+='    </div>';
    html+='  </div>';
    html+='  <div class="col-md-8">';
    html+='    <div class="form-group">';
    html+='      <label for="example-text-input" class="form-control-label">Description</label>';
    html+='      <textarea id="description' + count + '" class="form-control" name="description[]" aria-label=" " data-index="' + count + '"></textarea>';
    html+='    </div>';
    html+='  </div>';
    html+='  <div class="col-md-2">';
    html+='    <div class="form-group">';
    html+='      <label for="example-text-input" class="form-control-label">Date</label>';
    html+='      <input id="date' + count + '" class="form-control" type="text" name="date[]" value="" data-index="' + count + '">';
    html+='    </div>';
    html+='  </div>';
    html+='  <div class="col-md-2 mt-4">';
    html+='    <div class="form-group">';
    html+='      <button type="button" class="btn btn-success add">+</button>';
    html+='      <button type="button" class="btn btn-danger remove">-</button>';
    html+='    </div>';
    html+='  </div>';
    html+='</div>';
  
      content.append(html);
  
      count = countClass + 1;
      $("#countClass").val(count);
    });
  
    $(".add2").on("click", function () {
      var countClass = $("#countClass2").val();
      var content = $(".contentIncrement2");
      var html = "";
      countClass = parseInt(countClass);
      var count = countClass;
  

    html+='      <textarea id="descriptionsArray' + count + '" class="form-control" name="descriptionsArray[]" aria-label=" " data-index="' + count + '"></textarea>';

  
      content.append(html);
  
      count = countClass + 1;
      $("#countClass2").val(count);

      console.log(count);
    });
  
    $('.remove').on('click', function () {
        console.log('teste');
        var countClass = $("#countClass").val();
        countClass = parseInt(countClass);
        var count = countClass;
        if (count > 1) {
            $("#contentClass" + (count - 1)).remove();
            count = countClass - 1;
            $("#countClass").val(count);
        }
        });
   
 

        $('#addAreas').on('click', function () {
          var html = '';

          html+='    <div class="form-group">';
          html+='      <label for="example-text-input" class="form-control-label">Name</label>';
          html+='      <input id="name" class="form-control" type="text" name="name" value="">';
          html+='    </div>';
          html+='  </div>';
          html+='    <div class="form-group">';
          html+='      <label for="example-text-input" class="form-control-label">Locale</label>';
          html+='      <input id="locale" class="form-control" type="text" name="locale" value="">';
          html+='    </div>';
          html+='  </div>';
          html+='    <div class="form-group">';
          html+='      <label for="example-text-input" class="form-control-label">Data</label>';
          html+='      <input id="data" class="form-control" type="text" name="data" value="">';
          html+='    </div>';
          html+='  </div>';

        bootbox.dialog({
            title: 'Add a new Area:',
            message: html,
            seze: 'large',
            buttons: {
                success: {
                    label: 'Save',
                    className: 'btn-success',
                    callback: function () {
                        var name = document.getElementById('name').value;
                        var data_process = document.getElementById('data').value;
                        var locale = document.getElementById('locale').value;


                        console.log(name);
                        console.log(data_process);
                        console.log(locale);
                     
                        $.ajax({
                            url: '../controller/ResumeController.php?action=salvarArea',
                            type: 'POST',
                            data: 'name=' + name + '&data_process=' + data_process + '&locale=' + locale,
                        }).done(function (data) {
                          console.log(data);
                         
                            if (data == 1) {
                                bootbox.alert('Area added successfully!');
                                location.reload();
                            } else {
                                bootbox.alert('Error adding area!');
                            }
                        });
                    }
            }
          }
        });


        });

});