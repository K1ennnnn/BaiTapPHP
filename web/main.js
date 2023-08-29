document.querySelector(".main_btnAddnew").addEventListener("click", () => {
    document.querySelector(".main_Addnew").classList.toggle("hide");
  });
  
  const queryID = (id) => {
    return document.getElementById(id);
  };
  
  const table = document.querySelector(".table-container");
  
  queryID("form_Addnew").addEventListener("submit", (e) => {
    const Name = queryID("Name").value;
    const Old = queryID("Old").value;
    const Class = queryID("Class").value;
    e.preventDefault();
    if (Name == "" || Old == "" || Class == "") {
      alert("Vui lòng nhập đầy đủ thông tin");
    } else {
      const idTbody = document.createElement("tbody");
      idTbody.innerHTML = `      <tr>
          <td>
              
            <i onclick="removeList(this)" class="fa-solid fa-circle-xmark"></i>
          </td>
          <td>${Name}</td>
          <td>${Old}</td>
          <td>${Class}</td>
        </tr>`;
      table.appendChild(idTbody);
    }
  });
  
  function removeList(element) {
    const tdBody = element.parentElement.parentElement.parentElement;
    table.removeChild(tdBody);
    console.log(tdBody);
  }
  
  // console.log(address);
  