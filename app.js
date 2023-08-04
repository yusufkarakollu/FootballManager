// Örnek JSON verisi
var jsonData = {
    "data": [
        {
            "id": 2,
            "name": "Poland",
            "image_path": "https://cdn.sportmonks.com/images/countries/png/short/pl.png",
            "extra": {
                "continent": "Europe",
                "sub_region": "Eastern Europe",
                "world_region": "EMEA",
                "fifa": "POL",
                "iso": "POL",
                "iso2": "PL",
                "longitude": "19.37775993347168",
                "latitude": "52.147850036621094",
                "flag": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1280\" height=\"800\" viewBox=\"0 0 16 10\"><path fill=\"#fff\" d=\"M0 0h16v10h-16z\"/><path fill=\"#dc143c\" d=\"M0 5h16v5h-16z\"/></svg>\n"
            }
        },
        {
            "id": 5,
            "name": "Brazil",
            "image_path": "https://cdn.sportmonks.com/images/countries/png/short/br.png",
            "extra": {
                "continent": "Americas",
                "sub_region": "South America",
                "world_region": "AMER",
                "fifa": "BRA",
                "iso": "BRA",
                "iso2": "BR",
                "longitude": "-52.97311782836914",
                "latitude": "-10.81045150756836",
            }
        }
    ]
};

// JSON verisini al ve HTML içinde renderla
var dataContainer = document.getElementById("dataContainer");
var searchInput = document.getElementById("searchInput");

function renderData(searchTerm) {
    dataContainer.innerHTML = ""; // Mevcut içeriği temizle
    jsonData.data.forEach(function (item) {
        if (item.name.toLowerCase().includes(searchTerm.toLowerCase())) {
            var countryDiv = document.createElement("div");
            countryDiv.innerHTML = `
                <h2>${item.name}</h2>
                <img src="${item.image_path}" alt="${item.name} Flag" />
                <p>Continent: ${item.extra.continent}</p>
                <p>Sub Region: ${item.extra.sub_region}</p>
                <!-- Buraya diğer veriler eklenir -->
            `;
            dataContainer.appendChild(countryDiv);
        }
    });
}

// Arama çubuğu üzerinde kullanıcı girişi değiştiğinde verileri filtrele
searchInput.addEventListener("input", function (event) {
    var searchTerm = event.target.value;
    renderData(searchTerm);
});

// Sayfa yüklendiğinde tüm verileri göster
renderData("");