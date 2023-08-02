<h1>Create a Professional</h1>
<script>
  window.onload = function() {
    handleSubmitForm();
  };
  function handleSubmitForm(){
    const form = document.getElementById('form');
    form.addEventListener('submit', function(e){
      e.preventDefault();
      var name = document.getElementById('name').value
      var address = document.getElementById('address').value
      var email = document.getElementById('email').value
      var salary = document.getElementById('salary').value

      const json = {
        name: name,
        address: address,
        email: email,
        salary: salary,
      }

      fetch('http://localhost/myapp/final_project/pages/professionals_create/api.php',
      {
        headers: {
          'Content-type': 'application/json'
        },
        method: 'POST',
        body: JSON.stringify(json)
      })
      .then((res) =>{
        return res.json()
      })
      .then((res) =>{
        console.log(res);
        window.location.href = 'http://localhost/myapp/final_project/index.php?page=professionals';
      })
      .catch((error) =>console.error(error));
    });
  }
</script>

<form id="form" method="post">

  <label> Name
    <input name='name' id='name' value='' type='text' required/> 
  </label>
  <br/> 

  <label> Address
    <input name='address' id='address' value='' type='text'/> 
  </label>
  <br/>
   
  <label> Email
    <input name='email' id='email' value='' type='email' required/> 
  </label>
  <br/>

  <label> Salary
    <input name='salary' id='salary' value='' type='number' required/> 
  </label>
  <br/>
  
  
  <button type="submit" id="submit">Submit</button>
  <input type="reset" value="Cancel" id="reset" onClick="myFunction()"/>
  <script>
  function myFunction() {
    window.location.href="http://localhost/myapp/final_project/index.php?page=professionals";
  }
 </script>
</form>