const buttons = [...document.querySelectorAll(".calculator__button")];
const screen = document.getElementById("calculator__screen");

buttons.forEach(button => {
  button.addEventListener("click", async function() {
    const value = this.innerHTML;
    console.log(value);
    switch (value) {
      case "X": {
        screen.innerHTML = "";
        break;
      }
      case "&lt;": {
        if (screen.innerHTML === "") break;
        screen.innerHTML = screen.innerHTML.slice(0, screen.innerHTML.length - 1);
        break;
      }
      case "CALCULATE": {
        const response = await fetch("getResultOfExpression.php", {
          method: "POST",
          body: JSON.stringify({
            expression: screen.innerHTML.trim(),
          }),
        });
        if (response.status !== 200) {
          alert("Проверьте правильность ввода");
        } else {
          const body = await response.json();
          screen.innerHTML = body.answer;
        }
        // console.log(response.);
        break;
      }
      default: {
        screen.innerHTML = screen.innerHTML + value;
      }
    }
  })
});