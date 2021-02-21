//  DROPDOWN 1

// Check if the "selectbox" variable is defined, 
// this code fires when it is undefined (website reload)
  if (typeof selectbox == 'undefined'){

  // DROPDOWN 1
  const selectbox = document.querySelector(".selectbox");
  const selectboxDisplay = document.querySelector(".selectbox__displayWord");
  const optionList = document.querySelectorAll(".option-container__option");
  const submitbtn = document.getElementById('btn_form');

  selectboxDisplay.addEventListener("click", (e) => {
      e.stopPropagation();
      selectbox.classList.toggle("selectbox--active");
  });

  // function shakeBox() {
  //     selectbox.classList.add("selectbox--shake");
  //     setTimeout(() => {
  //         selectbox.classList.remove("selectbox--shake");
  //     }, 300);
  // }

  optionList.forEach((option, index) => {
      option.addEventListener("click", (e) => {
          e.stopPropagation();

          let label = option.querySelector("label");
          selectboxDisplay.innerHTML = label.innerHTML;
          selectbox.setAttribute("data-option", label.getAttribute("data-value"));
          selectbox.classList.remove("selectbox--active", "selectbox--unselect");
      });
  });

  // submitbtn.addEventListener("click", () => {
  //   if (selectbox.classList.contains("selectbox--unselect")) shakeBox();
  // });
  window.addEventListener("click", () => {
      selectbox.classList.remove("selectbox--active");
  });
}
