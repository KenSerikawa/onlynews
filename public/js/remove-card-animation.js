function removeCard(id) {
    let card = $("#" + id)
    card.animate({
        opacity: 0.25,
        left: "+=50",
        height: "toggle"
      })
}