let uri = '';


const download_cert = document.querySelector('#download_cert');
const StdName = document.querySelector('#StudentName').value;
const CrsName = document.querySelector('#CourseName').value;
const CompDate = document.querySelector('#CompDate').value;
const CertUrl = document.querySelector('#cert-url').innerHTML;


const part1 = "has successfully completed the \" ";
const part2 = " \" \n \t training and has demonstrated proficiency by passing";
const part3 = "\n \t \t \t \t \t the assessment on ";

const generatePDF = async (sname, cname, cdate,certUrl) => {
    const {PDFDocument, rgb} = PDFLib;
    const exBytes = await fetch('/assets/img/cert/cert.pdf').then((res) => {
        return res.arrayBuffer();
    });

    const exFont = await fetch('/assets/css/fonts/Poppins-medium.ttf').then((res) => {
        return res.arrayBuffer();
    });

    const pdfDoc = await PDFDocument.load(exBytes);
    pdfDoc.setTitle(StdName +" - "+ CompDate);
    pdfDoc.setAuthor('ecomgladiators | we empower entrepreneur')
    pdfDoc.setCreator('ecomgladiators | we empower entrepreneur')
    pdfDoc.setCreationDate(new Date())
    
    pdfDoc.registerFontkit(fontkit)
    const myFont = await pdfDoc.embedFont(exFont);
    const pages = pdfDoc.getPages();
    const StudentName = pages[0];
    const CourseName = pages[0];
    const Comp_Date = pages[0];
    const CertUrl = pages[0];
    const {width, height} = StudentName.getSize();

    const textSize = 35;
    const urlTextSize = 15;

    StudentName.drawText(sname, {
        x: StudentName.getWidth() / 2 - myFont.widthOfTextAtSize(sname, textSize) / 2,
        y: StudentName.getHeight() / 2 - myFont.heightAtSize(textSize) / 2 + 80,
        size: textSize,
        font: myFont,
    });

    CourseName.drawText(cname, {
        x: width / 2 - 280,
        y: height / 2,
        size: 18,
        font: myFont,
    })
    Comp_Date.drawText(cdate, {
        x: width / 2 + 5,
        y: height / 2 - 50,
        size: 15,
        font: myFont,
    })
    CertUrl.drawText(certUrl, {
        x: CertUrl.getWidth() / 2 - myFont.widthOfTextAtSize(certUrl, urlTextSize) / 2,
        y: (CertUrl.getHeight() /  CertUrl.getHeight() ) + myFont.heightAtSize(urlTextSize) / 2 + 15 ,
        size: urlTextSize,
        font: myFont,
    });



    uri = await pdfDoc.saveAsBase64({dataUri: true});
    document.querySelector('#myCert').src = uri;
}

download_cert.addEventListener('click', () => {
    saveAs(uri, StdName + "-" + CompDate, {autoBom: true});

})
generatePDF(StdName, part1 + CrsName + part2 + part3, "\t \"  " + CompDate + " \" " ,CertUrl);
