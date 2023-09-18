
const FAQ = [
  {
    question: "Q1: How do I open a bank account?",
    answer:
      `To open a bank account with us, follow these steps:

      <br>1. Visit our nearest branch or apply online through our website.
      <br>2. Choose the type of account that suits your needs (e.g., savings, checking, or a specific product).
      <br>3. Provide the required identification documents, such as a valid government-issued ID, proof of address, and Social Security Number.
      <br>4. Complete the application form with accurate personal information.
      <br>5. Make an initial deposit as per the account's minimum balance requirement.
      <br>6. Review and accept the terms and conditions.
      <br>7. Once your application is approved, you'll receive your account details and can start using your new account.`
  },
  {
    question: "What is the maximum file upload size ?",
    answer:
      "No more than 2GB. All files in your account must fit your allotted storage space."
  },
  {
    question: "How do I reset my password ?",
    answer:
      "Click “Forgot password” from the login page or “Change password” from your profile page. A reset link will be emailed to you"
  },
  {
    question: "Can I cancel my subscription ?",
    answer:
      "Yes! Send us a message and we’ll process your request no questions asked."
  },
  {
    question: "Do you provide additional support ?",
    answer:
      "Chat and email support is available 24/7. Phone lines are open during normal business hours."
  }
];

const mainContainerEl = document.getElementById("mainContainer");

function FAQuestions() {
  return FAQ.forEach((item) => {
    return createHTMLElements(item.question, item.answer);
  });
}

function createHTMLElements(question, answer) {
  const card = document.createElement("div");
  card.classList.add("card");
  const questionCont = document.createElement("div");
  questionCont.classList.add("question");
  card.appendChild(questionCont);
  const questionPara = document.createElement("div");
  questionPara.classList.add("questionpara");
  const questionEl = document.createElement("p");
  questionCont.appendChild(questionPara);
  questionPara.appendChild(questionEl);
  questionEl.innerHTML = question;
  const arrowCont = document.createElement("div");
  const arrowImg = document.createElement("i");
  arrowImg.classList.add("fa-solid");
  arrowImg.classList.add("fa-angle-down");
  arrowImg.classList.add("fa-xl");
  arrowImg.style.color = "#ffffff";

  arrowCont.classList.add("arrowCont");
  arrowCont.appendChild(arrowImg);
  questionCont.appendChild(arrowCont);

  // Answer Element
  const answerCont = document.createElement("div");
  answerCont.classList.add("answer");
  const answerPara = document.createElement("div");
  answerPara.classList.add("answerPara");
  answerCont.appendChild(answerPara);
  const answerEl = document.createElement("p");
  answerEl.innerHTML = answer;
  answerPara.appendChild(answerEl);
  card.appendChild(answerCont);
  mainContainerEl.appendChild(card);

  // All Cont
}

FAQuestions();

const allCont = mainContainerEl.querySelectorAll(".card");

allCont.forEach((e) => {
  const btn = e.querySelector(".question");

  btn.addEventListener("click", (pos) => {
    allCont.forEach((item) => {
      if (item !== e) {
        item.classList.remove("Queactive");
      }
    });
    e.classList.toggle("Queactive");
  });
});


document.getElementById("form").addEventListener("submit", function(event) {
  // event.preventDefault(); // Prevent the default form submission behavior

  var searchbar = document.getElementById("searchbar");
  var searchTerm = document.getElementById("searchTerm");
  // Get form data
  var formData = searchbar.value;
  // console.log(formData);
  // alert(formData);
  searchTerm.innerText = formData;
});
