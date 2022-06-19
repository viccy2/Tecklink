var valid_countries = ["US", "IT"];

function extractPrice(description, country) {
  if (!valid_countries.includes(country)) {
    return -1;
  }

  if (country == "US") {
    var price = description.match(/\$(\d+\.\d+)/)[1];

    if (price == null) {
      return -1;
    }

    return parseFloat(price);
  }

  if (country == "IT") {
    var price = description.match(/(\d+)\€/)[1];
    // var price = description.match(/(\d+)\$(\d+)/)[1];

    if (price == null) {
      return -1;
    }

    return parseFloat(price);
  }
}

console.log("===US===", extractPrice("$19.99", "US"));
console.log("===IT===", extractPrice("19€99", "IT"));
