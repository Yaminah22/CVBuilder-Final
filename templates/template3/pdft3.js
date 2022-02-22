var btnpdf=document.getElementById("pdf");


async function generatepdf(){
   
    var downloading=document.getElementById("doc2");
    var divHeight = $('#doc2').height();
    var divWidth = $('#doc2').width();
    var ratio = divHeight / divWidth;
    var doc=new jsPDF();
    var width = doc.internal.pageSize.getWidth();    
    var height = doc.internal.pageSize.getHeight();
    height = ratio * width;
    await html2canvas(downloading,{
        allowTaint:true,
        useCORS:true,
        width:divWidth+50,
        height:divHeight+50
        
    }).then((canvas)=>{
        //canvas convert to png
        doc.addImage(canvas.toDataURL("image/png"),'PNG',0,25,width+10,height);

    })
    doc.save("cv.pdf");
    
}
btnpdf.addEventListener("click",generatepdf());