<main>
    <div class="d-flex justify-content-center py-5">
        <form id="bmiForm" class="border border-secondary rounded-4 p-4" style="width: 50%;">
            <section class="mb-4 text-center">
                <h1 class="fw-bold">BMI CALCULATE</h1>
            </section>
            <div class="mb-3">
                <input type="number" class="form-control" id="height" placeholder="Enter your body height (cm)">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="weight" placeholder="Enter your body weight (kg)">
            </div>
            <div class="d-grid gap-2">
                <button type="button" onclick="calculateBMI()" class="btn btn-dark">Calculate</button>
            </div>
            <div class="mt-4 text-center" id="result"></div>
        </form>
    </div>
</main>
<script>
  function calculateBMI() {
      const weight = parseFloat(document.getElementById('weight').value);
      const height = parseFloat(document.getElementById('height').value) / 100; // Convert height to meters

      if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
        document.getElementById('result').innerHTML = '<p>Please enter valid values!</p>';
        return;
      }

      const bmi = weight / (height * height);
      let category = '';

      if (bmi < 18.5) {
        category = 'Underweight';
      } else if (bmi < 24.9) {
        category = 'Normal weight';
      } else if (bmi < 29.9) {
        category = 'Overweight';
      } else {
        category = 'Obese';
      }

      document.getElementById('result').innerHTML = `
      <br><div class="alert alert-secondary" role="alert">
       <p>Your BMI is: <strong>${bmi.toFixed(1)}</strong></p>
       <p>Category: <strong>${category}</strong></p>
      </div>
      `;
  }
</script>
