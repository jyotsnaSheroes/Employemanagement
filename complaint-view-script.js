// var doc = new jsPDF();
// var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
// };

$('#cmd').click(function () {   
    // doc.fromHTML($('#notebook-paper	').html(), 15, 15, {
    //     'width': 170,
    //         'elementHandlers': specialElementHandlers
    // });
    // doc.save('sample-file.pdf');
   var pdf = new jsPDF('a', 'mm', 'a4');
  var firstPage;
  var secondPage;
  //var dataURL = canvas.toDataURL();
  html2canvas($('#image-sheroes'), {
    onrendered: function(canvas) {
      firstPage = canvas.toDataURL('image/png', 1.0);
    }
  });
  
  html2canvas($('#notebook-paper'), {
    onrendered: function(canvas) {
      secondPage = canvas.toDataURL('image/png', 1.0);
    }
  });
  
  
  setTimeout(function(){
    pdf.addImage(firstPage, 'PNG', 5, 5, 200, 0);
    //pdf.addPage();
    pdf.addImage(secondPage, 'PNG', 5, 5, 200, 0);
    pdf.save("export.pdf");
  }, 150);
});