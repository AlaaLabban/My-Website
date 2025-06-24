document.getElementById("feedbackForm").addEventListener("submit", function(event) {
  let errors = [];

  const fname = document.getElementById("fname").value.trim();
  const lname = document.getElementById("lname").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const university = document.getElementById("university").value.trim();
  const address = document.getElementById("address").value.trim();
  const id_number = document.getElementById("id_number").value.trim();
  const city = document.getElementById("city").value;
  const feedback = document.getElementById("feedback").value.trim();
  const gender = document.querySelector("input[name='gender']:checked");

  // Validations
  if (!fname) errors.push("First name is required.");
  if (!lname) errors.push("Last name is required.");
  if (!email.includes("@")) errors.push("Valid email is required.");
  if (!university) errors.push("University is required.");
  if (!address) errors.push("Address is required.");
  if (!id_number || !/^[0-9]+$/.test(id_number)) errors.push("ID must be numeric.");
  if (!phone || !/^[+]?[0-9]+$/.test(phone)) errors.push("Phone must be numeric and may start with '+'.");
  if (!city) errors.push("Please select a city.");
  if (!gender) errors.push("Gender is required.");
  if (!feedback) errors.push("Feedback cannot be empty.");

  if (errors.length > 0) {
    event.preventDefault();
    alert(errors.join("\\n"));
  }
});