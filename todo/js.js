const items = document.querySelectorAll('.item');
const columns = document.querySelectorAll('.column');

let draggedItem = null;

for (let i = 0; i < items.length; i++) {
  const item = items[i];

  item.addEventListener('dragstart', function () {
    draggedItem = item;
    setTimeout(function () {
      item.style.display = 'none';
    }, 0);
  });

  item.addEventListener('dragend', function () {
    setTimeout(function () {
      draggedItem.style.display = 'block';
      draggedItem = null;
    }, 0);
  });

  for (let j = 0; j < columns.length; j++) {
    const column = columns[j];

    column.addEventListener('dragover', function (e) {
      e.preventDefault();
    });

    column.addEventListener('dragenter', function (e) {
      e.preventDefault();
      this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
    });

    column.addEventListener('dragleave', function () {
      this.style.backgroundColor = '#f2f2f2';
    });

    column.addEventListener('drop', function (e) {
      this.appendChild(draggedItem);
      this.style.backgroundColor = '#f2f2f2';
    });
  }
}