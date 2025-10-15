const holidays = ["正月","成人の日","建国記念日","天皇誕生日","春分の日","昭和の日","憲法記念日","みどりの日","こどもの日","海の日","山の日","敬老の日","秋分の日","スポーツの日","文化の日","勤労感謝の日"]

// for文の場合
for (const holidays  =1; holidays<= 16;  holidays += 1) { 
    console.log(holidays)
}

// while文の場合
while (holidays !== 0) {

    holidays = Math.floor(Math.random() * 5);

    console.log(holidays);
}