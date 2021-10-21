function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == ("hello")) {
        return "Chào bạn..Bạn cần giúp đỡ về vấn đề gì?";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if (input == "ai đẹp trai nhất") {
        return "Theo thống kê trai đẹp toàn quốc thì hiện nay bạn Minh Lưng đẹp trai nhất vũ trụ nha !!!";
    } else {
        return "Try asking something else!";
    }
}