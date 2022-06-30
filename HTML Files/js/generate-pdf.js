function generatePDF () {
	const element = document.getElementById("element");

	html2pdf(element, {
  		margin:       0,
  		filename:     'grades.pdf',
  		image:        { type: 'png', quality: 0.6 },
  		html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  		jsPDF:        { unit: 'mm', format: 'A3', orientation: 'portrait' }
});
	
}