function toggleSitecopyTargets(source) {
  const checkboxes = document.getElementsByName('sitecopy[targets][]');
  const isChecked = source.checked;

  for (let i = 1, n = checkboxes.length; i < n; i++) {
    checkboxes[i].checked = isChecked;
  }
}

function updateSitecopyToggleAll() {
  const toggleAll = document.getElementById('sitecopy-toggle-all');

  if (toggleAll) {
    const checkboxes = document.getElementsByName('sitecopy[targets][]');
    toggleAll.checked = Array.from(checkboxes).every((checkbox) => checkbox.checked);
  }
}
