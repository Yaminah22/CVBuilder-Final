var btnpdf=document.getElementById("pdf");


async function generatepdf(){
   
    var downloading=document.getElementById("pdfdownloaddiv");
    var divHeight = $('#pdfdownloaddiv').height();
    var divWidth = $('#pdfdownloaddiv').width();
    var ratio = divHeight / divWidth;
    var doc=new jsPDF();
    var width = doc.internal.pageSize.getWidth();    
    var height = doc.internal.pageSize.getHeight();
    height = ratio * width;
    await html2canvas(downloading,{
        allowTaint:true,
        useCORS:true,
        width:divWidth+100,
        height:divHeight
        
    }).then((canvas)=>{
        //canvas convert to png
        doc.addImage(canvas.toDataURL("image/png"),'PNG',0,30,width,height-20);

    })
    doc.save("cv.pdf");
    
}
btnpdf.addEventListener("click",generatepdf());