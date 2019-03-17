// Quiz Creator;
function CQuiz(que, o1, o2, ans, d)  {
    this.question = que;
    this.opt1 = o1;
    this.opt2 = o2;
    this.answer = ans;
    this.asked = d;
}

// Question 1
var q1 = new CQuiz(
    'You find it difficult to introduce yourself to other people.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 2
var q2 = new CQuiz(
    'It is often difficult for you to relate to other people’s feelings.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 3
var q3 = new CQuiz(
    'Being organized is more important to you than being adaptable.',
    'Agree',
    'Disagree',
    1,
    0
)

// Question 4
var q4 = new CQuiz(
    'You find it easy to stay relaxed even when there is some pressure',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 5
var q5 = new CQuiz(
    'Your travel plans are usually well thought out.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 6
var q6 = new CQuiz(
    'You consider yourself more practical than creative.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 7
var q7 = new CQuiz(
    'Winning a debate matters less to you than making sure no one gets upset.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 8
var q8 = new CQuiz(
    'You feel superior to other people.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 9
var q9 = new CQuiz(
    'You do not usually initiate conversations.',
    'Agree',
    'Disagree',
    1,
    0
);

// Question 10
var q10 = new CQuiz(
    'You try to respond to your e-mails as soon as possible and cannot stand a messy inbox.',
    'Agree',
    'Disagree',
    1,
    0
);
// total question...
var totQ = [q1,q2,q3,q4,q5,q6,q7,q8,q9,q10];