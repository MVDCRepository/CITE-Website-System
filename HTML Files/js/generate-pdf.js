function generatePDF () {
	const element = document.getElementById("element");

	html2pdf(element, {
  		margin:       0,
  		filename:     'grades.pdf',
  		image:        { type: 'jpeg', quality: 0.98 },
  		html2canvas:  { scale: 4, logging: true, letterRendering: true},
  		jsPDF:        { unit: 'mm', format: 'Legal', orientation: 'portrait' }
});
	
}