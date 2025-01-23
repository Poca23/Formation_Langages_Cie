document.addEventListener("DOMContentLoaded", function () {
    const quizForm = document.getElementById("quizForm");

    if (quizForm) {
        quizForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const questions = document.querySelectorAll(".question-container");
            let score = 0;

            for (let question of questions) {
                const questionId = question.dataset.question;
                const answer = formData.get(`answers[${questionId}]`);
                const feedbackElement = document.getElementById(
                    `feedback_${questionId}`
                );

                try {
                    const response = await fetch("/quiz/check-answer", {
                        method: "POST",
                        body: JSON.stringify({
                            question_id: questionId,
                            answer: answer,
                        }),
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content,
                            Accept: "application/json",
                        },
                    });

                    const result = await response.json();

                    feedbackElement.classList.remove("hidden");
                    if (result.correct) {
                        score++;
                        feedbackElement.innerHTML = `<div class="correct">Correct! ${result.explanation}</div>`;
                    } else {
                        feedbackElement.innerHTML = `<div class="incorrect">Incorrect. ${result.explanation}</div>`;
                    }
                } catch (error) {
                    console.error("Error:", error);
                    feedbackElement.innerHTML =
                        '<div class="error">Une erreur est survenue.</div>';
                }
            }

            // Store final result
            try {
                await fetch("/quiz/store-result", {
                    method: "POST",
                    body: JSON.stringify({
                        quiz_id: formData.get("quiz_id"),
                        score: score,
                        total_questions: questions.length,
                    }),
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content,
                        Accept: "application/json",
                    },
                });
            } catch (error) {
                console.error("Error storing result:", error);
            }
        });
    }
});
