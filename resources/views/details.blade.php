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
      Applicants Details
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet">
    <style>
      body { background-color: #f8f9fa; margin: 20px; } table { width: 100%;
      border-collapse: collapse; background-color: #fff; } th, td { padding:
      10px; text-align: center; border: 1px solid #ccc; } th { background-color:
      #007bff; color: #fff; } th, td { width: 25%; } td label { font-weight:
      bold; } input[type="text"] { width: 100%; border: none; background-color:
      transparent; } .file-link { margin-left: 100px; /* Adjust the left margin
      as needed */ } .container { margin-top: 20px; } /* Remove the file input
      browse option */ .custom-file-label::after { content: "Upload"; }
    </style>
  </head>
  
  <body>
    <div class="container mt-5">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Name of applicant
          </b>
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            (in block letters as in SSLC)
          </span>
        </label>
        <input readonly type="text" name="name" class="form-control" id="name"
        value='{{$users->name}}'>
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Gender
          </b>
        </label>
        <input readonly name="gender" id="gender" class="form-select" style="width: 100%; margin-right: 10px;"
        value='{{$users->gender}}'>
      </div>
      <div class="mb-3">
        <label for="dob" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Date of Birth in Christian Era
          </b>
          (
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            Copy of certificate to prove should be enclosed
          </span>
          )
        </label>
        <input readonly type="date" name="dob" class="form-control" style="width: 100%; margin-right: 10px;"
        value='{{$users->dob}}' id="dob">
      </div>
      <div class="mb-3">
        <label for="religion" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Religion/Caste
          </b>
        </label>
        <input readonly type="text" name="religion" class="form-control" style="width: 100%; margin-right: 10px;"
        value='{{$users->religion}}' id="religion">
        <label for="nationality" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Nationality
          </b>
          (
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            Copy of certificate to prove should be enclosed
          </span>
          )
        </label>
        <div>
          <input name="nationality" id="gender" style="width: 100%; margin-right: 10px;"
          value='{{$users->nationality}}' readonly>
        </div>
        <label for="guardian" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Name & occupation of parent / guardian & relationship
          </b>
          (
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            Copy of certificate to prove should be enclosed
          </span>
          )
        </label>
        <input readonly type="text" name="guardian" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->guardian}}' id="guardian">
      </div>
      <div class="mb-3">
        <label for="comaddress" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Address for communication with pin code & Telephone no
          </b>
          (
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            in block letters
          </span>
          )
        </label>
        <input readonly type="text" name="comaddress" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->comaddress}}' id="comaddress">
        <label for="permaddress" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Permanent Address with pin code
          </b>
          (
          <span style="font-family: Arial, sans-serif; font-style: italic; ">
            in block letters
          </span>
          )
        </label>
        <input readonly type="text" name="permaddress" class="form-control" style="width: 100%; margin-right: 10px;"
        value='{{$users->permaddress}}' id="permaddress">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Email address of the applicant
          </b>

        </label>
        <input readonly type="text" name="email" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->email}}' id="email">
        <label for="contact1" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Contact Number - 1
          </b>
        </label>
        <input readonly type="text" name="contact1" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->contact1}}' id="contact1">
        <label for="contact2" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Contact Number - 2
          </b>
        </label>
        <input readonly type="text" name="contact2" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->contact2}}' id="contact2">
      </div>
      <div class="mb-3">
        <label for="examname" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Name of Examination
          </b>
        </label>
        <input readonly type="text" name="examname" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->examname}}' id="examname">
        <label for="board" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Board /University
          </b>
        </label>
        <input readonly type="text" name="board" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->board}}' id="board">
        <label for="register12" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Register No 12th
          </b>
        </label>
        <input readonly type="text" name="register12" style="width: 100%; margin-right: 10px;"
        class="form-control" value='{{$users->register12}}' id="register12">
      </div>
      <div class="mb-3">
        <label for="yearof12" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Year of passing 12th
          </b>
        </label>
        <input readonly type="text" name="yearof12" style="width: 100%; margin-right: 10px;"
        class="form-control" id="yearof12" value='{{$users->yearof12}}'>
        <label for="instname" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            Name of Institution
          </b>
        </label>
        <input readonly type="text" name="instname" style="width: 100%; margin-right: 10px;"
        class="form-control" id="instname" value='{{$users->instname}}'>
        <label for="state" class="form-label" style="width: 100%; margin-right: 10px;">
          <b>
            State
          </b>
        </label>
        <input readonly type="text" name="state" style="width: 100%; margin-right: 10px;"
        class="form-control" id="state" value='{{$users->state}}'>
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
              </label>
            </td>
            <td>
              <input readonly type="text" id="p" style="width: 100%; margin-right: 10px;"
              name="p" class="form-control" value='{{$marks->p}}'>
            </td>
            <td>
              <input readonly type="text" id="pmax" style="width: 100%; margin-right: 10px;"
              name="pmax" class="form-control" value='{{$marks->pmax}}'>
            </td>
            <td>
              <input readonly type="text" id="phyperc" style="width: 100%; margin-right: 10px;"
              name="phyperc" class="form-control" value='{{$marks->phyperc}}'>
            </td>
          </tr>
          <tr>
            <td>
              <label for="chemistry" class="form-label" style="width: 100%; margin-right: 10px;">
                Chemistry
              </label>
            </td>
            <td>
              <input readonly type="text" id="c" style="width: 100%; margin-right: 10px;"
              name="c" class="form-control" value='{{$marks->c}}'>
            </td>
            <td>
              <input readonly type="text" id="cmax" style="width: 100%; margin-right: 10px;"
              name="cmax" class="form-control" value='{{$marks->cmax}}'>
            </td>
            <td>
              <input readonly type="text" id="chemperc" style="width: 100%; margin-right: 10px;"
              name="chemperc" class="form-control" value='{{$marks->chemperc}}'>
            </td>
          </tr>
          <tr>
            <td>
              <label for="biology" class="form-label" style="width: 100%; margin-right: 10px;">
                Biology
              </label>
            </td>
            <td>
              <input readonly type="text" id="b" style="width: 100%; margin-right: 10px;"
              name="b" class="form-control" value='{{$marks->b}}'>
            </td>
            <td>
              <input readonly type="text" id="bmax" style="width: 100%; margin-right: 10px;"
              name="bmax" class="form-control" value='{{$marks->bmax}}'>
            </td>
            <td>
              <input readonly type="text" id="bioperc" style="width: 100%; margin-right: 10px;"
              name="bioperc" class="form-control" value='{{$marks->bioperc}}'>
            </td>
          </tr>
          <tr>
            <td>
              <label for="english" class="form-label" style="width: 100%; margin-right: 10px;">
                English
              </label>
            </td>
            <td>
              <input readonly type="text" id="e" style="width: 100%; margin-right: 10px;"
              name="e" class="form-control" value='{{$marks->e}}'>
            </td>
            <td>
              <input readonly type="text" id="emax" style="width: 100%; margin-right: 10px;"
              name="emax" class="form-control" value='{{$marks->emax}}'>
            </td>
            <td>
              <input readonly type="text" id="engperc" style="width: 100%; margin-right: 10px;"
              name="engperc" class="form-control" value='{{$marks->engperc}}'>
            </td>
          </tr>
          <tr>
            <td>
              <label for="total" class="form-label" style="width: 100%; margin-right: 10px;">
                <b>
                  Total
                </b>
              </label>
            </td>
            <td>
              <input readonly type="text" id="total" style="width: 100%; margin-right: 10px;"
              name="total" class="form-control" value='{{$marks->total}}'>
            </td>
            <td>
              <input readonly type="text" id="maxtotal" style="width: 100%; margin-right: 10px;"
              name="maxtotal" class="form-control" value='{{$marks->maxtotal}}'>
            </td>
            <td>
              <input readonly type="text" id="totalperc" style="width: 100%; margin-right: 10px;"
              name="totalperc" class="form-control" value='{{$marks->totalperc}}'>
            </td>
          </tr>
          <tr>
            <td>
              <label for="grandtotal" class="form-label" style="width: 100%; margin-right: 10px;">
                <b>
                  Grand total (all subject)
                </b>
                (
                <span style="font-family: Arial, sans-serif; font-style: italic;">
                  2nd year marks
                </span>
                )
              </label>
            </td>
            <td>
              <input readonly type="text" id="grand" style="width: 100%; margin-right: 10px;"
              name="grand" class="form-control" value='{{$marks->grand}}'>
            </td>
            <td>
              <input readonly type="text" id="grandmax" style="width: 100%; margin-right: 10px;"
              name="grandmax" class="form-control" value='{{$marks->grandmax}}'>
            </td>
            <td>
              <input readonly type="text" id="grandperc" style="width: 100%; margin-right: 10px;"
              name="grandperc" class="form-control" value='{{$marks->grandperc}}'>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="custom-file" style="text-align: Left;" >
                <br>
                <h1>
                Photo
                </h1>
                <br>
                <img src="{{asset('storage/images/'.$users->image)}}" width="50%">
            <br>
            <br>
      </div>

      <div class="custom-file" >
        <h2>
          Files /Poofs
        </h2>
        <ul>
          <li>
            <a href="{{asset('storage/pdfs/'.$users->dobpdf)}}">
              Date of Birth
            </a>
          </li>
          <li>
            <a href="{{asset('storage/addresspdf/'.$users->addresspdf)}}">
              Address Proof
            </a>
          </li>
          <li>
            <a href="{{asset('storage/examdoc/'.$users->examdoc)}}">
              Exam Book
            </a>
          </li>
          <li>
            <a href="{{asset('storage/freedoc/'.$users->freedoc)}}">
              Fee Remittance
            </a>
          </li>
        </ul>
      
    </div>
  </body>
</html>