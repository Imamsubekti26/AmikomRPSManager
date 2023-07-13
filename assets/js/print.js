function getHtmlContent() {
  return document.querySelector("table").innerHTML;
}

function printPageAsPdf() {
  // const doc = jspdf.jsPDF();
  // const htmlContent = getHtmlContent();
  // let startY = 10;
  // let page = 1;
  // let contentHeight = doc.getTextDimensions(htmlContent).h;
  // const pageHeight = doc.internal.pageSize.height;
  // while (startY < contentHeight) {
  // doc.text(htmlContent);
  // doc.fromHTML(htmlContent, 15, startY + 10);
  //   startY += pageHeight - 20;
  //   page++;
  //   if (startY < contentHeight) {
  //     doc.addPage();
  //   }
  // }
  // doc.save("website.pdf");
  // console.log(doc);
}
printPageAsPdf();
