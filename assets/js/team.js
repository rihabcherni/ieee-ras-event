const teamMembers = [
  {
    "img": "assets/img/team/louay.jpeg",
    "name": "Louay Sahbani",
    "post": "Event Manager",
    "linkedin": "https://www.linkedin.com/in/louay-sahbani-b39700254",
    "facebook": "https://www.facebook.com/people/Louay-Sahbani/100010407935669/",
  },
  {
    "img": "assets/img/team/Elyanoubli.jpg",
    "name": "Elyanoubli Med Amine",
    "post": "Co-Event Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  },
  {
    "img": "assets/img/team/maram.jpg",
    "name": "Belgharat Marams",
    "post": "External Relations Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/belgharat.maram.7",
  },
  {
    "img": "assets/img/team/molka-weslati.jpeg",
    "name": "Molka Wesleti",
    "post": "Marketing Team Leader",
    "linkedin": "https://www.linkedin.com/in/molka-weslati-121580284",
    "facebook": "https://www.facebook.com/molkaaa06",
  },
  {
    "img": "assets/img/team/molka.jpeg",
    "name": "Molka Guesmi",
    "post": "Coordinator",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  },
  {
    "img": "assets/img/team/Ismail.jpeg",
    "name": "Ismail Mnif",
    "post": "Logistics Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  },
  {
    "img": "assets/img/team/rihab.jpeg",
    "name": "Rihab Cherni",
    "post": "Website Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  },
  {
    "img": "assets/img/team/fedi.jpg",
    "name": "Fedi Bahloul",
    "post": "Website Co-Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  },
  {
    "img": "assets/img/team/oumaima.PNG",
    "name": "Oumaima Bouguerra",
    "post": "Sponsoring Manager",
    "linkedin": "https://www.linkedin.com/in/member2",
    "facebook": "https://www.facebook.com/member2",
  }
];


function generateTeamCards(teamMembers) {
  const teamContainer = document.querySelector('.team-members');
  teamContainer.innerHTML = ''; 

  teamMembers.forEach(member => {
    const memberCard = `
         <div class="member-card">
              <img src="${member.img}" alt="${member.name}">
              <div class="icons">
                  <a href="${member.linkedin}" target="_blank"><i style="font-size:24px" class="fa">&#xf08c;</i></a>
                  <a href="${member.facebook}" target="_blank"><i style="font-size:24px" class="fa">&#xf09a;</i></a>
              </div>
              <div class="content">
                <div class="contentBox">
                  <h2>${member.name}</h2>
                  <h3>${member.post}</h3>
                </div>
              </div>
              
          </div>
    `;
    teamContainer.innerHTML += memberCard;
  });
}
generateTeamCards(teamMembers);
