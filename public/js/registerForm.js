$('#registerForm').submit(function(e) {

  let dancestyleChecked = $("input[name='dancestyle[]']:checked").length;
  let howfindusChecked = $("input[name='howfindus[]']:checked").length;

  if (!dancestyleChecked) {
    alert("Kas või üks tantsustiil peab valitud olema.");
    e.preventDefault();
    return false;
  }

  if (!howfindusChecked) {
    alert("Märkige ära, kust te meiest saite teada.");
    e.preventDefault();
    return false;
  }
});
