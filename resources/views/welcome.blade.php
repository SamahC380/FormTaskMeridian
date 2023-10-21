<!DOCTYPE html>
<html lang="en">
  
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Online Admission Form
    </title>
    <style>
      table { width: 100%; border-collapse: collapse; margin-top: 20px; } table,
      th, td { border: 1px solid #ccc; } th, td { padding: 10px; text-align:
      center; } th { background-color: #0066cc; color: #ffffff; } tr:nth-child(even)
      { background-color: #f2f2f2; }
    </style>
  </head>
  
  <body>
    <div class="container mt-5">
      <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Name of applicant
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              in block letters as in SSLC
            </span>
            )
          </label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name of Applicant"
          pattern="[A-Z ]+">
          <span id="nameError" class="text-danger">
          </span>
          @error('name')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Gender
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <select name="gender" id="gender" class="form-select" style="width: 100%; margin-right: 10px;">
            <option value="Male">
              Male
            </option>
            <option value="Female">
              Female
            </option>
            <option value="Transgender">
              Transgender
            </option>
          </select>
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Date of Birth in Christian Era
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              Copy of certificate to prove should be enclosed
            </span>
            )
          </label>
          <input type="date" name="dob" class="form-control" style="width: 100%; margin-right: 10px;"
          id="dob">
          @error('dob')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="religion" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Religion/Caste
            </b>
          </label>
          <input type="text" name="religion" class="form-control" style="width: 100%; margin-right: 10px;"
          id="religion" placeholder="Enter Religion/Caste">
          <label for="nationality" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Nationality
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              Copy of certificate to prove should be enclosed
            </span>
            )
          </label>
          <div>
            <select name="nationality" id="gender" style="width: 100%; margin-right: 10px;">
              <option value="">
                Select One
              </option>
              <option value="India">
                India
              </option>
              <option value="China">
                China
              </option>
              <option value="Pakistan">
                Pakistan
              </option>
            </select>
            @error('nationality')
            <p class="alert mt-2">
              {{ $message }}
            </p>
            @enderror
          </div>
          <label for="guardian" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Name & occupation of parent / guardian & relationship
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              Copy of certificate to prove should be enclosed
            </span>
            )
          </label>
          <input type="text" name="guardian" style="width: 100%; margin-right: 10px;"
          class="form-control" id="guardian" placeholder="Enter name & occupation of guardian">
          @error('guardian')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="comaddress" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Address for communication with pin code & Telephone no
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              in block letters
            </span>
            )
          </label>
          <input type="text" name="comaddress" style="width: 100%; margin-right: 10px;"
          class="form-control" id="comaddress" pattern="[A-Z ]+" placeholder="Enter Address for Communication with pin code and Telephone No">
          @error('comaddress')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <label for="permaddress" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Permanent Address with pin code
            </b>
            <sup style="color: red">
              *
            </sup>
            (
            <span style="font-family: Arial, sans-serif; font-style: italic; ">
              in block letters
            </span>
            )
          </label>
          <input type="text" name="permaddress" class="form-control" style="width: 100%; margin-right: 10px;"
          id="permaddress" pattern="[A-Z ]+" placeholder="Enter Permenent Address (in block letters) with pin code">
          @error('permaddress')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Email address of the applicant
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="email" style="width: 100%; margin-right: 10px;"
          class="form-control" id="email">
          @error('email')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <table>
            <tr>
              <th>
                <label for="contact1" class="form-label" style="width: 100%; margin-right: 10px;">
                  <b>
                    Contact Number - 1
                  </b>
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </th>
              <th>
                <label for="contact2" class="form-label" style="width: 100%; margin-right: 10px;">
                  <b>
                    Contact Number - 2
                  </b>
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </th>
            </tr>
            <tr>
              <td>
                <input type="text" name="contact1" style="width: 100%; margin-right: 10px;"
                class="form-control" id="contact1" placeholder="0000000000">
                @error('contact1')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" name="contact2" style="width: 100%; margin-right: 10px;"
                class="form-control" id="contact2" placeholder="0000000000">
                @error('contact2')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
          </table>
        </div>
        <div class="mb-3">
          <label for="examname" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Name of Examination
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="examname" style="width: 100%; margin-right: 10px;"
          class="form-control" id="examname" placeholder="Enter name of your exam">
          @error('examname')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <label for="board" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Board /University
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="board" style="width: 100%; margin-right: 10px;"
          class="form-control" id="board" placeholder="Enter board/universiy">
          @error('board')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <label for="register12" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Register No 12th
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="register12" style="width: 100%; margin-right: 10px;"
          class="form-control" id="register12" placeholder="Enter register number 12th">
          @error('register of 12th')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="yearof12" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Year of passing 12th
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="yearof12" style="width: 100%; margin-right: 10px;"
          class="form-control" id="yearof12" placeholder="Year of Passing 12th">
          @error('year of 12th')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <label for="instname" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              Name of Institution
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="instname" style="width: 100%; margin-right: 10px;"
          class="form-control" id="instname" placeholder="Enter name of your institute">
          @error('institute name')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
          <label for="state" class="form-label" style="width: 100%; margin-right: 10px;">
            <b>
              State
            </b>
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="text" name="state" style="width: 100%; margin-right: 10px;"
          class="form-control" id="state" placeholder="Enter your state">
          @error('state')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <table>
          <thead>
            <tr>
              <th scope="col">
                <b>
                  Subject
                </b>
              </th>
              <th scope="col">
                <b>
                  Secured
                </b>
              </th>
              <th scope="col">
                <b>
                  Maximum
                </b>
              </th>
              <th scope="col">
                <b>
                  Percentage
                </b>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <label for="physics" class="form-label" style="width: 100%; margin-right: 10px;">
                  Physics
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </td>
              <td>
                <input type="text" id="p" style="width: 100%; margin-right: 10px;" name="p"
                class="form-control">
                @error('physics')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="pmax" style="width: 100%; margin-right: 10px;"
                name="pmax" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="phyperc" style="width: 100%; margin-right: 10px;"
                name="phyperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
            <tr>
              <td>
                <label for="chemistry" class="form-label" style="width: 100%; margin-right: 10px;">
                  Chemistry
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </td>
              <td>
                <input type="text" id="c" style="width: 100%; margin-right: 10px;" name="c"
                class="form-control">
                @error('chemistry')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="cmax" style="width: 100%; margin-right: 10px;"
                name="cmax" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="chemperc" style="width: 100%; margin-right: 10px;"
                name="chemperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
            <tr>
              <td>
                <label for="biology" class="form-label" style="width: 100%; margin-right: 10px;">
                  Biology
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </td>
              <td>
                <input type="text" id="b" style="width: 100%; margin-right: 10px;" name="b"
                class="form-control">
                @error('biology')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="bmax" style="width: 100%; margin-right: 10px;"
                name="bmax" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="bioperc" style="width: 100%; margin-right: 10px;"
                name="bioperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
            <tr>
              <td>
                <label for="english" class="form-label" style="width: 100%; margin-right: 10px;">
                  English
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </td>
              <td>
                <input type="text" id="e" style="width: 100%; margin-right: 10px;" name="e"
                class="form-control">
                @error('english')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="emax" style="width: 100%; margin-right: 10px;"
                name="emax" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="engperc" style="width: 100%; margin-right: 10px;"
                name="engperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
            <tr>
              <td>
                <label for="total" class="form-label" style="width: 100%; margin-right: 10px;">
                  <b>
                    Total
                  </b>
                  <sup style="color: red">
                    *
                  </sup>
                </label>
              </td>
              <td>
                <input type="text" id="total" style="width: 100%; margin-right: 10px;"
                name="total" class="form-control">
                @error('total')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="maxtotal" style="width: 100%; margin-right: 10px;"
                name="maxtotal" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="totalperc" style="width: 100%; margin-right: 10px;"
                name="totalperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
            <tr>
              <td>
                <label for="grandtotal" class="form-label" style="width: 100%; margin-right: 10px;">
                  <b>
                    Grand total (all subject)
                  </b>
                  <sup style="color: red">
                    *
                  </sup>
                  (
                  <span style="font-family: Arial, sans-serif; font-style: italic;">
                    2nd year marks
                  </span>
                  )
                </label>
              </td>
              <td>
                <input type="text" id="grand" style="width: 100%; margin-right: 10px;"
                name="grand" class="form-control">
                @error('grand')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="grandmax" style="width: 100%; margin-right: 10px;"
                name="grandmax" class="form-control">
                @error('max')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
              <td>
                <input type="text" id="grandperc" style="width: 100%; margin-right: 10px;"
                name="grandperc" class="form-control">
                @error('percentage')
                <p class="alert mt-2">
                  {{ $message }}
                </p>
                @enderror
              </td>
            </tr>
          </tbody>
        </table>
        <div class="custom-file">
          <label class="custom-file-label" for="image">
            Upload Passport Size Photo
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="file" class="custom-file-input" id="image" name="image">
          @error('image')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="dobpdf">
            Date of Birth in Christian Era
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="file" class="custom-file-input" id="dobpdf" name="dobpdf">
          @error('proof of dob')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="addresspdf">
            Permanent Address
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="file" class="custom-file-input" id="addresspdf" name="addresspdf">
          @error('addressproof')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="exampdf">
            Details of Qualifying Examination
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="file" class="custom-file-input" id="exampdf" name="exampdf">
          @error('examdetail')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div class="custom-file">
          <label class="custom-file-label" for="fee">
            Remittance of Application Fee of Rs 800/-
            <sup style="color: red">
              *
            </sup>
          </label>
          <input type="file" class="custom-file-input" id="fee" name="fee">
          @error('fee remittance')
          <p class="alert mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
        <div>
          <input type="hidden" name="applicant_id" />
        </div>
        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
  </body>
  <script>
    // Function to convert text to block letters
    function convertToBlockLetters(inputElement) {
      const inputValue = inputElement.value;

      if (/[a-z]/.test(inputValue)) {

        const blockText = inputValue.toUpperCase().replace(/ /g, '\u0020');

        inputElement.value = blockText;
      }
    }

    const nameInput = document.getElementById('name');

    nameInput.addEventListener('input',
    function() {
      convertToBlockLetters(nameInput);
    });
  </script>

</html>