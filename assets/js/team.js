$(document).ready(() => {
	const baseURL = window.location.origin + "/Telyupharmacy/";
	$.getJSON(`${baseURL}assets/json/team.json`, (data) => {
		let dataTeam = "";
		$.each(data, (key, value) => {
			dataTeam += `
      <div class="card">
        <div class="card-body">
          <img id="team-photo" src="${baseURL}assets/uploads/profile/${value.image}" alt=""
            class="img-fluid rounded-circle">
          <h3 id="nama"> ${value.name} </h3>
          <h3 id="nim"> ${value.nim} </h3>
        </div>
      </div>
      `;
		});
		$("#team").append(dataTeam);
	});
});
