var btnpdf=document.getElementById("pdf");

async function generatepdf(){

    var downloading=document.getElementById("ad");
    var divHeight = $('#ad').height();
    var divWidth = $('#ad').width();
    var ratio = divHeight / divWidth;
    var doc=new jsPDF();
    var width = doc.internal.pageSize.getWidth();
    var height = doc.internal.pageSize.getHeight();
    height = ratio * width;
    await html2canvas(downloading,{
        allowTaint:true,
        useCORS:true,
        width:divWidth+150,
        height:divHeight+100

    }).then((canvas)=>{
        //canvas convert to png
        doc.addImage(canvas.toDataURL("image/png"),'PNG',3,35,width+20,height);

    })
    doc.save("cv.pdf");

}
btnpdf.addEventListener("click",generatepdf());
