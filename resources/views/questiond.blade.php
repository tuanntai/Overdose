<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trung Tâm Lái Xe OVERDOSE</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
  <link rel="icon" href="https://marsurl.com/images/2021/05/19/logo.png" type="image/icon type">
  <link rel="stylesheet" href="./CSS/index.css">
  <link rel="stylesheet" href="./CSS/footer.css">
  <link rel="stylesheet" href="./CSS/question.css">
  <link rel="shortcut icon" href="./IMAGE/logo.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <section class='header'>
    <div class="logo-container">
      <img src="./IMAGE/logo.png" alt="logo">

    </div>
    <nav>
      <ul class="nav-links">
        <li><a class="nav-link" href="{{Route('index')}}">Trang chủ</a></li>
        <li><a class="nav-link" href="{{Route('intro')}}">Giới thiệu</a></li>
        <li><a class="nav-link" href="{{Route('home')}}">Khóa học</a></li>
        <li><a class="nav-link" href="{{Route('questiona1')}}">Ôn lý thuyết</a></li>
        @if (Auth::check())

        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
        {{-- <li><a class="nav-link" href=" {{ route('logout') }}">Đăng xuất</a></li> --}}
        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
        {{-- {!! Form::close() !!} --}}
        <a class="nav-link" id="logoutbutton" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logoutform').submit();">
          Đăng xuất
        </a>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

        @else
        <li><a class="nav-link" href="{{route('login')}}">Đăng nhập</a></li>
        @endif
      </ul>
    </nav>
  </section>


  <section class="choice">
    <ul class="nav-links">
      <li><a class="nav-link" href="{{Route('questiona1')}}">Câu hỏi Lý thuyết A1, A2</a></li>
      <li><a class="nav-link" href="{{Route('questionb1')}}">Câu hỏi Lý thuyết B1, B2</a></li>
      <li><a class="nav-link" href="{{Route('questionc')}}">Câu hỏi Lý thuyết C</a></li>
      <li><a class="nav-link" href="{{Route('questiond')}}">Câu hỏi Lý thuyết D</a></li>
    </ul>
  </section>
  <section class="question1">
    <br>
    <br>
    <h1>Câu hỏi Lý thuyết bằng D</h1>
    <br>
    <br>
    <div class="quiz-container">
      <div id="quiz"></div>
    </div>
    <br>
    <div class="button-choice">
      <button id="previous">Câu hỏi trước</button>
      <button id="next">Câu hỏi tiếp theo</button>
      <button id="submit">Chấm điểm</button>
      <div id="results"></div>
    </div>
    <br>

  </section>
  <div class="footer-basic">
    <footer>
      <div class="social">
        <a href="#"><i class="icon ion-social-instagram"></i></a>
        <a href="#"><i class="icon ion-social-snapchat"></i></a>
        <a href="#"><i class="icon ion-social-twitter"></i></a>
        <a href="https://www.facebook.com/Trung-tâm-dạy-lái-xe-Overdose-107896341488474/?notif_id=1621501594289030&notif_t=page_name_change_admin&ref=notif"><i class="icon ion-social-facebook"></i></a>
      </div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="{{Route('index')}}">Trang Chủ</a></li>
        <li class="list-inline-item"><a href="{{Route('intro')}}">Giới Thiệu</a></li>
        <li class="list-inline-item"><a href="{{Route('home')}}">Khóa Học</a></li>
        <li class="list-inline-item"><a href="https://hoclaixemoto.com/thi-bang-lai-xe-may-a1-online/">Thi Thử</a></li>
        @if (Auth::check())

        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
        {{-- <a class="nav-link" href=" {{ route('logout') }}">Logout</a> --}}
        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
        {{-- {!! Form::close() !!} --}}
        <li class="list-inline-item"><a id="logoutbutton" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
            Đăng xuất
          </a></li>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

        @else
        <li class="list-inline-item"><a href="{{route('login')}}">Đăng nhập</a></li>
        @endif
      </ul>
      <p class="copyright">OVERDOSE DRIVING SCHOOL</p>
    </footer>
  </div>

</body>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  (function() {
    // Functions
    function buildQuiz() {
      // variable to store the HTML output
      const output = [];

      // for each question...
      myQuestions.forEach(
        (currentQuestion, questionNumber) => {

          // variable to store the list of possible answers
          const answers = [];

          // and for each available answer...
          for (letter in currentQuestion.answers) {

            // ...add an HTML radio button
            answers.push(
              `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
            );
          }

          // add this question and its answers to the output
          output.push(
            `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
          );
        }
      );

      // finally combine our output list into one string of HTML and put it on the page
      quizContainer.innerHTML = output.join('');
    }

    function showResults() {

      // gather answer containers from our quiz
      const answerContainers = quizContainer.querySelectorAll('.answers');

      // keep track of user's answers
      let numCorrect = 0;

      // for each question...
      myQuestions.forEach((currentQuestion, questionNumber) => {

        // find selected answer
        const answerContainer = answerContainers[questionNumber];
        const selector = `input[name=question${questionNumber}]:checked`;
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;

        // if answer is correct
        if (userAnswer === currentQuestion.correctAnswer) {
          // add to the number of correct answers
          numCorrect++;

          // color the answers green
          answerContainers[questionNumber].style.color = 'green';
        }
        // if answer is wrong or blank
        else {
          // color the answers red
          answerContainers[questionNumber].style.color = 'red';
        }
      });

      // show number of correct answers out of total
      resultsContainer.innerHTML = `Đúng ${numCorrect} trong số ${myQuestions.length} câu hỏi`;
    }

    function showSlide(n) {
      slides[currentSlide].classList.remove('active-slide');
      slides[n].classList.add('active-slide');
      currentSlide = n;
      if (currentSlide === 0) {
        previousButton.style.display = 'none';
      } else {
        previousButton.style.display = 'inline-block';
      }
      if (currentSlide === slides.length - 1) {
        nextButton.style.display = 'none';
        submitButton.style.display = 'inline-block';
      } else {
        nextButton.style.display = 'inline-block';
        submitButton.style.display = 'inline-block';
      }
    }

    function showNextSlide() {
      showSlide(currentSlide + 1);
    }

    function showPreviousSlide() {
      showSlide(currentSlide - 1);
    }

    // Variables
    const quizContainer = document.getElementById('quiz');
    const resultsContainer = document.getElementById('results');
    const submitButton = document.getElementById('submit');
    const myQuestions = [{
        question: "Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?",
        answers: {
          a: "Phần mặt đường và lề đường.",
          b: "Phần đường xe cơ giới",
          c: "Phần đường xe chạy"
        },
        correctAnswer: "c"
      },
      {
        question: "Phương tiện tham gia giao thông đường bộ” gồm những loại nào?",
        answers: {
          a: "Phương tiện giao thông cơ giới đường bộ.",
          b: "Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.",
          c: "Cả ý 1 và ý 2"
        },
        correctAnswer: "c"
      },
      {
        question: "Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?",
        answers: {
          a: "Không được vượt.",
          b: "Được vượt khi đang đi trên cầu.",
          c: "Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.",
          d: "Được vượt khi đảm bảo an toàn."
        },
        correctAnswer: "a"
      }, {
        question: "Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?",
        answers: {
          a: "Phần mặt đường và lề đường.",
          b: "Phần đường xe cơ giới",
          c: "Phần đường xe chạy"
        },
        correctAnswer: "c"
      },
      {
        question: "Phương tiện tham gia giao thông đường bộ” gồm những loại nào?",
        answers: {
          a: "Phương tiện giao thông cơ giới đường bộ.",
          b: "Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.",
          c: "Cả ý 1 và ý 2"
        },
        correctAnswer: "c"
      },
      {
        question: "Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?",
        answers: {
          a: "Không được vượt.",
          b: "Được vượt khi đang đi trên cầu.",
          c: "Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.",
          d: "Được vượt khi đảm bảo an toàn."
        },
        correctAnswer: "a"
      }, {
        question: "Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?",
        answers: {
          a: "Phần mặt đường và lề đường.",
          b: "Phần đường xe cơ giới",
          c: "Phần đường xe chạy"
        },
        correctAnswer: "c"
      },
      {
        question: "Phương tiện tham gia giao thông đường bộ” gồm những loại nào?",
        answers: {
          a: "Phương tiện giao thông cơ giới đường bộ.",
          b: "Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.",
          c: "Cả ý 1 và ý 2"
        },
        correctAnswer: "c"
      },
      {
        question: "Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?",
        answers: {
          a: "Không được vượt.",
          b: "Được vượt khi đang đi trên cầu.",
          c: "Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.",
          d: "Được vượt khi đảm bảo an toàn."
        },
        correctAnswer: "a"
      }, {
        question: "Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?",
        answers: {
          a: "Phần mặt đường và lề đường.",
          b: "Phần đường xe cơ giới",
          c: "Phần đường xe chạy"
        },
        correctAnswer: "c"
      },
      {
        question: "Phương tiện tham gia giao thông đường bộ” gồm những loại nào?",
        answers: {
          a: "Phương tiện giao thông cơ giới đường bộ.",
          b: "Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.",
          c: "Cả ý 1 và ý 2"
        },
        correctAnswer: "c"
      },
      {
        question: "Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?",
        answers: {
          a: "Không được vượt.",
          b: "Được vượt khi đang đi trên cầu.",
          c: "Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.",
          d: "Được vượt khi đảm bảo an toàn."
        },
        correctAnswer: "a"
      }
    ];

    // Kick things off
    buildQuiz();

    // Pagination
    const previousButton = document.getElementById("previous");
    const nextButton = document.getElementById("next");
    const slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    // Show the first slide
    showSlide(currentSlide);

    // Event listeners
    submitButton.addEventListener('click', showResults);
    previousButton.addEventListener("click", showPreviousSlide);
    nextButton.addEventListener("click", showNextSlide);
  })();
</script>

</html>