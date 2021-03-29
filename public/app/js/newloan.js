
$('#number_document').autocomplete({
   source: function(request,response) {
     $.get(base_url+'/findFormNumDocument/'+$('#number_document').val(),function (data){
         response(data);
     });
  },
   select:function (event,ui)
   {
     $('#name_client').val(ui.item.label);
     $('#type_document').val(ui.item.type_document);
     $('#document_select').val(ui.item.number_document);
     $(this).val('');
     return false;
   }
});
