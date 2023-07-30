// function empty() {
//   const name = document.myform.name.value;
//   const mail = document.myform.mail.value;
//   const number = document.myform.number.value;
//   const date = document.myform.date.value;

//   function ValidateEmail() {
//     if (
//       /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myform.mail.value)
//     ) {
//       const m = document.getElementById("mail");
//       Object.assign(m.style, normalStyle);
//       var t = document.getElementById("m");
//       t.style.display = "none";
//     } else {
//       const m = document.getElementById("mail");
//       Object.assign(m.style, styles);
//       m.placeholder = "";
//       var t = document.getElementById("m");
//       t.style.display = "block";
//       t.style.color = "red";
//     }
//   }

//   const styles = {
//     border: "3px solid hsl(0, 100%, 74%)",
//     "background-image": "url(./images/icon-error.svg)",
//     "background-repeat": "no-repeat",
//     "background-position": "95% 50%",
//     color: "red",
//   };
//   const normalStyle = {
//     border: "3px solid hsl(246, 25%, 77%)",
//     "background-image": "none",
//     color: "black",
//   };

//   if (name == "" || name == null) {
//     const f = document.getElementById("name");
//     Object.assign(f.style, styles);
//     f.placeholder = "";
//     var t = document.getElementById("f");
//     t.style.display = "block";
//   } else {
//     const f = document.getElementById("name");
//     Object.assign(f.style, normalStyle);
//     var t = document.getElementById("f");
//     t.style.display = "none";
//   }
//   if (mail == "" || mail == null) {
//     const m = document.getElementById("mail");
//     Object.assign(m.style, styles);
//     m.placeholder = "";
//     var t = document.getElementById("m");
//     t.style.display = "block";
//   } else {
//     ValidateEmail();
//   }
//   if (number == "" || number == null) {
//     const p = document.getElementById("number");
//     Object.assign(p.style, styles);
//     p.placeholder = "";
//     var t = document.getElementById("p");
//     t.style.display = "block";
//   } else {
//     const p = document.getElementById("number");
//     Object.assign(p.style, normalStyle);
//     var t = document.getElementById("p");
//     t.style.display = "none";
//   }

//   if (date == "" || date == null) {
//     const d = document.getElementById("date");
//     Object.assign(d.style, styles);
//     p.placeholder = "";
//     var t = document.getElementById("d");
//     t.style.display = "block";
//   } else {
//     const p = document.getElementById("date");
//     Object.assign(p.style, normalStyle);
//     var t = document.getElementById("d");
//     t.style.display = "none";
//   }
//   if (
//     name == "" ||
//     name == null ||
//     mail == "" ||
//     mail == null ||
//     number == "" ||
//     number == null ||
//     date == "" ||
//     date == null
//   ) {
//     alert("Please Check Form Again!");
//   } else {
//     if (confirm(`Are you sure want to book for ${date}? `)) {
//       alert(`Thanks for Booking, ${name}`);
//     } else {
//       alert("Booking Cancelled!");
//     }
//   }
// }
