
const drop__cards = document.querySelectorAll(".drop__card");
const all_status = document.querySelectorAll(".status");
let draggabledrop__card = null;
let originalParent = null;
let originalNextSibling = null;

drop__cards.forEach((drop__card) => {
  drop__card.addEventListener("dragstart", dragStart);
  drop__card.addEventListener("dragend", dragEnd);
});

function dragStart() {
  draggabledrop__card = this;
  originalParent = this.parentNode;
  originalNextSibling = this.nextSibling;
  setTimeout(() => {
    this.style.display = "none";
  }, 0);
  console.log("dragStart");
}

function dragEnd() {
  draggabledrop__card = null;
  setTimeout(() => {
    this.style.display = "block";
  }, 0);
  console.log("dragEnd");
}

all_status.forEach((status) => {
  status.addEventListener("dragover", dragOver);
  status.addEventListener("dragenter", dragEnter);
  status.addEventListener("dragleave", dragLeave);
  status.addEventListener("drop", dragDrop);
});

function dragOver(e) {
  e.preventDefault();
  //   console.log("dragOver");
}

function dragEnter() {
  this.style.border = "4px dashed #ccc";
  console.log("dragEnter");
}

function dragLeave() {
  this.style.border = "none";
  console.log("dragLeave");
}

function dragDrop() {
  this.style.border = "none";
  if (this.classList.contains("status")) {
    this.appendChild(draggabledrop__card);
  } else {
    const no_status = document.querySelector("#no_status");
    no_status.appendChild(draggabledrop__card);
  }
  console.log("dropped");
}

const drop__container = document.querySelector(".drop__container");

drop__cards.forEach((drop__card) => {
  drop__card.addEventListener("dragover", (e) => {
    e.preventDefault();
  });
  drop__card.addEventListener("dragenter", (e) => {
    e.target.style.border = "4px dashed #ccc";
  });
  drop__card.addEventListener("dragleave", (e) => {
    e.target.style.border = "none";
  });
  drop__card.addEventListener("drop", (e) => {
    e.preventDefault();
    drop__container.insertBefore(draggabledrop__card, originalNextSibling);
  });
});

	