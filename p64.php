<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Score</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>

<body>
    <div class="container">
        <h1>Mental Health Score</h1>
        <div class="result">
            <span id="resultMessage"></span>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const totalScore = parseInt(urlParams.get('score'));
            alert("Your score is: " + totalScore);

            let resultMessage = '';

            if (totalScore >= 54 && totalScore < 215) {
                const htmlcode = `<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Celebrate Your Success</title>
<style>
  body {
    background-image: url("path/to/your/image.jpg");
    background-size: cover;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    color: #fff;
  }
  h1, h2, h3 {
    margin-bottom: 10px;
  }
  ol, ul {
    padding-left: 20px;
    margin-bottom: 20px;
  }
</style>
</head>
                <body background='data:image/png;base64,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'>
        <h1>Celebrate Your Success</h1>
        <p>We want to celebrate your incredible achievements and success in managing your mental health.</p>
        <p>Scoring between 54 to 215 indicates that you are not just managing, but thriving in various aspects of your life.</p>
        <p>Your resilience and determination are truly inspiring, and I encourage you to continue prioritizing your well-being.</p>
        <p>Want a better plan?? Here is a better one for you!!!!!</p>
        <h2>Daily Schedule:</h2>
        <hr>
        <h3>Morning Routine:</h3>
        <ol>
            <li>
                <strong>Wake Up (5:30 AM):</strong><br>
                Start your day with gratitude or a positive affirmation.
            </li>
            <li>
                <strong>Exercise (6:00 AM):</strong><br>
                Engage in 45-60 minutes of exercise, such as running, yoga, or strength training.
            </li>
            <li>
                <strong>Healthy Breakfast (7:30 AM):</strong><br>
                Enjoy a balanced breakfast with protein, whole grains, and fruits or vegetables.
            </li>
        </ol>
        <h3>Midday Activities:</h3>
        <ol start="4">
            <li>
                <strong>Work or Productive Activities (9:00 AM - 12:00 PM):</strong><br>
                Focus on your work or personal projects, taking short breaks to stay refreshed.
            </li>
            <li>
                <strong>Mindfulness or Meditation (12:00 PM):</strong><br>
                Practice mindfulness or meditation for mental clarity and relaxation.
            </li>
        </ol>
        <h3>Afternoon Routine:</h3>
        <ol start="6">
            <li>
                <strong>Lunch and Leisure (12:30 PM):</strong><br>
                Have a nutritious lunch and spend some time doing an activity you love.
            </li>
            <li>
                <strong>Creative or Learning Time (2:00 PM - 4:00 PM):</strong><br>
                Engage in a creative hobby or learn something new to stimulate your mind.
            </li>
        </ol>
        <h3>Evening Routine:</h3>
        <ol start="8">
            <li>
                <strong>Dinner (6:00 PM):</strong><br>
                Eat a light and healthy dinner to fuel your evening activities.
            </li>
            <li>
                <strong>Relaxation and Self-Care (7:00 PM):</strong><br>
                Engage in relaxation techniques such as reading, listening to music, or taking a bath.
            </li>
            <li>
                <strong>Social Connection (8:00 PM):</strong><br>
                Connect with friends or family, either in person or through a video call.
            </li>
            <li>
                <strong>Reflective Time (9:00 PM):</strong><br>
                Spend some time reflecting on your day and setting intentions for tomorrow.
            </li>
            <li>
                <strong>Bedtime Routine (10:00 PM):</strong><br>
                Prepare for bed by winding down with a calming activity.
            </li>
        </ol>
        <h2>Medication Suggestion (Lower Dosage):</h2>
        <hr>
        <p>CAUTION: THESE ARE TAKEN ONLY IN EMERGENCY</p>
        <ul>
            <li><strong>Antidepressant:</strong>
                <ul>
                    <li><strong>Escitalopram (Lexapro)</strong> - 5 mg daily</li>
                </ul>
            </li>
            <li><strong>Anti-Anxiety Medication:</strong>
                <ul>
                    <li><strong>Buspirone</strong> - 5 mg twice daily</li>
                </ul>
            </li>
            <li><strong>Mood Stabilizer:</strong>
                <ul>
                    <li><strong>Lamotrigine (Lamictal)</strong> - 25 mg once daily, increasing to 50 mg after two weeks if tolerated</li>
                </ul>
            </li>
        </ul>
        <p>Please consult with your healthcare provider before starting any new medication or making changes to your current regimen. Your progress is remarkable, and with continued self-care and support, you can continue to thrive and achieve your goals.</p>
    </body></html>

`
                    ;
                document.body.innerHTML = htmlcode;
            } else if (totalScore >= 215 && totalScore < 376) {
                const htmlcode1 = `<h1>Congratulations on your remarkable progress</h1>
        <p>Scoring between 215 to 376 indicates that you are not just managing, but succeeding in various aspects of your life.</p>
        <p>Your resilience and dedication to your well-being are truly commendable.</p>
        <p>Keep up the fantastic work!!!!</p>
        <p>Want to improve more ?? Here's how to do it !!!</p>
        <h2>Daily Schedule:</h2>
        <hr>
        <h3>Morning Routine:</h3>
        <ol>
            <li>
                <strong>Wake Up (6:00 AM):</strong><br>
                Start your day with a moment of gratitude or reflection.
            </li>
            <li>
                <strong>Exercise (6:30 AM):</strong><br>
                Engage in 30-45 minutes of exercise, such as jogging, yoga, or strength training.
            </li>
            <li>
                <strong>Healthy Breakfast (7:30 AM):</strong><br>
                Enjoy a nutritious breakfast with protein, whole grains, and fruits or vegetables.
            </li>
        </ol>
        <h3>Midday Activities:</h3>
        <ol start="4">
            <li>
                <strong>Work or Study (9:00 AM - 12:00 PM):</strong><br>
                Focus on your work or study goals, taking short breaks to stay refreshed.
            </li>
            <li>
                <strong>Mindfulness Break (12:00 PM):</strong><br>
                Practice mindfulness or deep breathing for a few minutes to reset your mind.
            </li>
        </ol>
        <h3>Afternoon Routine:</h3>
        <ol start="6">
            <li>
                <strong>Lunch and Leisure (12:30 PM):</strong><br>
                Have a balanced lunch and spend some time doing an activity you enjoy.
            </li>
            <li>
                <strong>Creative Time (2:00 PM - 4:00 PM):</strong><br>
                Engage in a creative hobby or project to stimulate your mind.
            </li>
        </ol>
        <h3>Evening Routine:</h3>
        <ol start="8">
            <li>
                <strong>Dinner (6:00 PM):</strong><br>
                Eat a light and healthy dinner to fuel your evening activities.
            </li>
            <li>
                <strong>Relaxation (7:00 PM):</strong><br>
                Wind down with a relaxing activity like reading, listening to music, or taking a bath.
            </li>
            <li>
                <strong>Social Connection (8:00 PM):</strong><br>
                Connect with friends or family, either in person or through a video call.
            </li>
            <li>
                <strong>Pre-Bedtime Routine (9:00 PM):</strong><br>
                Prepare for bed by dimming lights and engaging in a calming activity.
            </li>
            <li>
                <strong>Bedtime (10:00 PM):</strong><br>
                Aim for a consistent bedtime to ensure you get enough rest for the next day.
            </li>
        </ol>
        <h2>Medication Suggestion (Lower Dosage):</h2>
        <hr>
        <p>CAUTION: THESE ARE TAKEN ONLY IN EMERGENCY</p>
        <ul>
            <li><strong>Antidepressant:</strong>
                <ul>
                    <li><strong>Escitalopram (Lexapro)</strong> - 5 mg daily</li>
                </ul>
            </li>
            <li><strong>Anti-Anxiety Medication:</strong>
                <ul>
                    <li><strong>Buspirone</strong> - 5 mg twice daily</li>
                </ul>
            </li>
            <li><strong>Mood Stabilizer:</strong>
                <ul>
                    <li><strong>Lamotrigine (Lamictal)</strong> - 25 mg once daily, increasing to 50 mg after two weeks if tolerated</li>
                </ul>
            </li>
        </ul>
        <p>NOTE-Please consult with your healthcare provider before starting any new medication or making changes to your current regimen.</p>
        <p>At last, your progress is inspiring, and with continued support and self-care, you can continue to thrive in all aspects of your life.</p>` ; document.body.innerHTML = htmlcode1;

            } else if (totalScore >= 376 && totalScore < 537) {
                const htmlcode2 = `<h1>Acknowledging Your Progress</h1>
        <p>We want to acknowledge the progress you've made in managing your mental health.</p>
        <p>Scoring between 376 to 537 indicates that you are actively working on your well-being, and that's commendable.</p>
        <p>Your commitment to your mental health is inspiring, and I encourage you to continue prioritizing self-care and seeking support when needed.</p>
        <p>Remember, it's okay to have ups and downs, and reaching out for help is a sign of strength. Keep up the great work!</p>
        <p>Here's a daily schedule from our side to make yourself better!!!!</p>
        <h2>Daily Schedule:</h2>
        <hr>
        <h3>Morning Routine:</h3>
        <ol>
            <li>
                <strong>Wake Up (7:00 AM):</strong><br>
                Start your day with a positive affirmation or gratitude practice.<br>
                Enjoy a healthy breakfast to fuel your day.
            </li>
            <li>
                <strong>Exercise (8:00 AM):</strong><br>
                Engage in 30 minutes of moderate exercise, such as walking, jogging, or yoga.
            </li>
            <li>
                <strong>Work/Study (9:00 AM - 12:00 PM):</strong><br>
                Focus on your work or study goals, taking short breaks to stay refreshed.
            </li>
        </ol>
        <h3>Midday Activities:</h3>
        <ol start="4">
            <li>
                <strong>Lunch and Relaxation (12:00 PM):</strong><br>
                Have a nutritious lunch and take a short break to relax.
            </li>
            <li>
                <strong>Creative Time (1:00 PM - 3:00 PM):</strong><br>
                Engage in a creative hobby or activity that brings you joy.
            </li>
        </ol>
        <h3>Afternoon Routine:</h3>
        <ol start="6">
            <li>
                <strong>Social Connection (3:00 PM):</strong><br>
                Connect with a friend or loved one, either in person or virtually.
            </li>
            <li>
                <strong>Mindfulness or Meditation (4:00 PM):</strong><br>
                Practice mindfulness or meditation for relaxation and stress relief.
            </li>
        </ol>
        <h3>Evening Routine:</h3>
        <ol start="8">
            <li>
                <strong>Dinner (6:00 PM):</strong><br>
                Enjoy a balanced dinner to end your day on a healthy note.
            </li>
            <li>
                <strong>Leisure Time (7:00 PM):</strong><br>
                Spend time doing something you love, like reading, listening to music, or watching a movie.
            </li>
            <li>
                <strong>Relaxation Before Bed (9:00 PM):</strong><br>
                Wind down with a warm bath, gentle stretching, or reading a book.
            </li>
            <li>
                <strong>Bedtime Routine (10:00 PM):</strong><br>
                Aim for a consistent bedtime to ensure you get enough rest for the next day.
            </li>
        </ol>
        <h2>Medication Suggestion (Lower Dosage):</h2>
        <hr>
        <p>CAUTION: REMEMBER!!! THESE ARE TO BE TAKEN WHEN ONLY NEEDED THE MOST!!</p>
        <ul>
            <li><strong>Antidepressant:</strong>
                <ul>
                    <li><strong>Sertraline (Zoloft)</strong> - 50 mg daily</li>
                </ul>
            </li>
            <li><strong>Anti-Anxiety Medication:</strong>
                <ul>
                    <li><strong>Buspirone</strong> - 5 mg twice daily</li>
                </ul>
            </li>
            <li><strong>Mood Stabilizer:</strong>
                <ul>
                    <li><strong>Lamotrigine (Lamictal)</strong> - 25 mg once daily, increasing to 50 mg after two weeks if tolerated</li>
                </ul>
            </li>
        </ul>
        <p>Please remember to consult with your healthcare provider before starting any new medication or making changes to your current regimen.</p>
        <p>Your mental health journey is unique, and together, we can continue to find strategies that support your well-being.</p>`; document.body.innerHTML = htmlcode2;
            } else if (totalScore >= 537 && totalScore < 698) {
                const htmlcode2 = `<p>We want to express our compassion for you during this incredibly difficult time. 
Your score indicates that you are enduring severe mental health challenges.
Please know that you are not alone in this struggle. 
It is important to remember that, even in the darkest times, there is hope and a path to healing. 
Remember, it's okay to have ups and downs, and reaching out for help is a sign of strength. Keep up the great work!</p>

<p>This is an incredibly challenging time. Your score between 537 and 698 indicates that you're experiencing severe mental health struggles,
and we want you to know that your pain is deeply felt and understood. 
It's crucial to approach this with compassion, patience, and a structured support system.</p>

<h3>Daily Schedule</h3>
<hr>

<h4>Morning Routine:</h4>
<ol>
    <li><strong>Wake Up (8:00 AM):</strong>
        <ul>
            <li>Aim for at least 7-8 hours of sleep each night.</li>
            <li>Start your day with a brief grounding exercise, such as feeling your feet on the floor and taking deep breaths.</li>
        </ul>
    </li>
    <li><strong>Hydration and Light Movement (8:30 AM):</strong>
        <ul>
            <li>Drink a glass of water.</li>
            <li>Gentle stretching or yoga for 5-10 minutes to slowly wake up your body.</li>
        </ul>
    </li>
    <li><strong>Personal Hygiene (9:00 AM):</strong>
        <ul>
            <li>Take a shower and get dressed. This can help signal the start of a new day.</li>
        </ul>
    </li>
    <li><strong>Nourishing Breakfast (9:30 AM):</strong>
        <ul>
            <li>Eat a simple, balanced meal like oatmeal with fruits or whole-grain toast with a protein source.</li>
        </ul>
    </li>
</ol>

<h4>Midday Activities:</h4>
<ol start="5">
    <li><strong>Morning Reflection (10:00 AM):</strong>
        <ul>
            <li>Spend a few minutes journaling your thoughts and setting small, achievable goals for the day.</li>
        </ul>
    </li>
    <li><strong>Engage in a Calm Activity (10:30 AM - 12:00 PM):</strong>
        <ul>
            <li>Choose a low-stress activity such as reading, light housework, or an art project. Break tasks into very small steps.</li>
        </ul>
    </li>
    <li><strong>Nutritious Lunch (12:00 PM):</strong>
        <ul>
            <li>Have a balanced meal with lean protein, vegetables, and whole grains. Avoid highly processed foods.</li>
        </ul>
    </li>
    <li><strong>Rest and Relaxation (12:30 PM):</strong>
        <ul>
            <li>Take a short nap or rest period if needed. Listen to calming music or guided meditations.</li>
        </ul>
    </li>
</ol>

<h4>Afternoon Routine:</h4>
<ol start="9">
    <li><strong>Therapeutic Activity (1:00 PM - 2:00 PM):</strong>
        <ul>
            <li>Engage in a therapeutic activity like knitting, painting, or a simple puzzle.</li>
        </ul>
    </li>
    <li><strong>Light Exercise (2:00 PM):</strong>
        <ul>
            <li>A short walk outside or gentle exercise routine. Fresh air and movement can improve mood.</li>
        </ul>
    </li>
    <li><strong>Connect with Nature (3:00 PM):</strong>
        <ul>
            <li>Spend time outside, even if it's just sitting on a balcony or by an open window.</li>
        </ul>
    </li>
    <li><strong>Mindful Breathing (4:00 PM):</strong>
        <ul>
            <li>Practice mindful breathing exercises to help reduce anxiety and promote relaxation.</li>
        </ul>
    </li>
</ol>

<h4>Evening Routine:</h4>
<ol start="13">
    <li><strong>Light Dinner (5:00 PM):</strong>
        <ul>
            <li>Have a light, healthy dinner. Consider foods that promote good sleep, such as those rich in tryptophan (like turkey or nuts).</li>
        </ul>
    </li>
    <li><strong>Social Connection (6:00 PM):</strong>
        <ul>
            <li>Connect with a friend or family member, even if it's just a short conversation. Isolation can worsen mental health symptoms.</li>
        </ul>
    </li>
    <li><strong>Relaxation Time (7:00 PM):</strong>
        <ul>
            <li>Engage in a relaxing activity like listening to a podcast, gentle stretching, or taking a warm bath.</li>
        </ul>
    </li>
    <li><strong>Bedtime Preparation (8:00 PM):</strong>
        <ul>
            <li>Avoid screens for at least an hour before bed. Wind down with a calming activity such as reading a book or practicing relaxation techniques.</li>
        </ul>
    </li>
    <li><strong>Sleep (9:00 PM):</strong>
        <ul>
            <li>Establish a consistent bedtime routine. Create a calming environment in your bedroom and aim for a full night's rest.</li>
        </ul>
    </li>
</ol>

<h3>Medication Suggestion</h3>
<hr>

<p><strong>CAUTION: THESE ARE TAKEN ONLY IN EMERGENCY</strong><br>
For someone enduring severe mental health challenges, medication can be a crucial part of the treatment plan. Please consult with a psychiatrist or primary care provider for personalized medical advice. Here are some commonly prescribed medications for severe mental health conditions:</p>

<ul>
    <li><strong>Clozapine (Clozaril):</strong>
        <ul>
            <li>Starting dose can be as low as 12.5 mg once or twice daily, with gradual increases under medical supervision.</li>
        </ul>
    </li>
    <li><strong>Olanzapine (Zyprexa):</strong>
        <ul>
            <li>Starting dose can be 2.5 mg to 5 mg once daily, with adjustments made as needed.</li>
        </ul>
    </li>
    <li><strong>Amitriptyline (Elavil):</strong>
        <ul>
            <li>Starting dose can be 10 mg to 25 mg once daily at bedtime, with increases made cautiously.</li>
        </ul>
    </li>
    <li><strong>Clonazepam (Klonopin):</strong>
        <ul>
            <li>Starting dose can be 0.125 mg to 0.25 mg twice daily, with increases made cautiously.</li>
        </ul>
    </li>
</ul>

<h3>Final Thoughts</h3>
<hr>

<p>It's essential to seek continuous support from mental health professionals. 
This plan is a starting point, and adjustments may be necessary based on your specific needs and circumstances.
Your mental health journey is unique, and taking these steps can help you navigate through this challenging phase toward a better state of well-being.
Please remember that there is hope, and with the right support, improvement is possible. You are not alone, and help is always available.</p>
`; document.body.innerHTML = htmlcode3;
            } else if (totalScore >= 698 && totalScore < 859) {
                const htmlcode4 = `<p>We understand that you're going through a challenging time, 
and it's important to approach this with compassion and structured support. 
Here’s a tailored daily schedule and medication suggestions for someone whose score is between 698 and 859, 
indicating a struggling phase. Remember, it's okay to have ups and downs, and reaching out for help is a sign of strength. Keep up the great work!</p>

<h3>Daily Schedule</h3>
<hr>

<h4>Morning Routine:</h4>
<ol>
    <li><strong>Wake Up (7:30 AM):</strong>
        <ul>
            <li>Aim for 7-8 hours of consistent sleep each night.</li>
            <li>Start your day with a short mindfulness meditation (5 minutes) to ground yourself.</li>
        </ul>
    </li>
    <li><strong>Hydration and Light Exercise (8:00 AM):</strong>
        <ul>
            <li>Drink a glass of water first thing.</li>
            <li>Engage in gentle stretching or a light walk for 10-15 minutes to get your body moving.</li>
        </ul>
    </li>
    <li><strong>Personal Hygiene (8:30 AM):</strong>
        <ul>
            <li>Shower and get dressed. Maintaining personal hygiene can help improve mood and self-esteem.</li>
        </ul>
    </li>
    <li><strong>Nutritious Breakfast (9:00 AM):</strong>
        <ul>
            <li>Have a balanced breakfast with fruits, whole grains, and protein. Avoid excessive sugar and caffeine.</li>
        </ul>
    </li>
</ol>

<h4>Midday Activities:</h4>
<ol start="5">
    <li><strong>Morning Check-In (9:30 AM):</strong>
        <ul>
            <li>Spend a few minutes journaling your thoughts, focusing on any positive aspects of the day ahead.</li>
        </ul>
    </li>
    <li><strong>Structured Activity (10:00 AM - 12:00 PM):</strong>
        <ul>
            <li>Engage in productive tasks or work. Break tasks into small, manageable chunks and use a timer (20 minutes work, 5 minutes break).</li>
        </ul>
    </li>
    <li><strong>Healthy Lunch (12:00 PM):</strong>
        <ul>
            <li>Eat a balanced meal with vegetables, lean protein, and complex carbohydrates.</li>
        </ul>
    </li>
    <li><strong>Relaxation (12:30 PM):</strong>
        <ul>
            <li>Take a short walk or practice a relaxation technique like deep breathing.</li>
        </ul>
    </li>
</ol>

<h4>Afternoon Routine:</h4>
<ol start="9">
    <li><strong>Focused Work or Hobbies (1:00 PM - 3:00 PM):</strong>
        <ul>
            <li>Continue with tasks or hobbies you enjoy. Engage in activities that bring you a sense of accomplishment.</li>
        </ul>
    </li>
    <li><strong>Physical Activity (3:00 PM):</strong>
        <ul>
            <li>Participate in moderate exercise, such as a brisk walk, yoga, or a simple workout routine.</li>
        </ul>
    </li>
    <li><strong>Creative Time (4:00 PM - 5:00 PM):</strong>
        <ul>
            <li>Spend time on a creative activity such as drawing, painting, or writing.</li>
        </ul>
    </li>
</ol>

<h4>Evening Routine:</h4>
<ol start="12">
    <li><strong>Light Dinner (6:00 PM):</strong>
        <ul>
            <li>Eat a light, balanced dinner. Avoid heavy or greasy foods that might affect sleep.</li>
        </ul>
    </li>
    <li><strong>Social Connection (7:00 PM):</strong>
        <ul>
            <li>Spend time connecting with friends or family, either in person or virtually.</li>
        </ul>
    </li>
    <li><strong>Relaxation and Self-Care (8:00 PM):</strong>
        <ul>
            <li>Engage in a relaxing activity such as reading, listening to calming music, or taking a warm bath.</li>
        </ul>
    </li>
    <li><strong>Wind Down (9:00 PM):</strong>
        <ul>
            <li>Avoid screens (phones, computers, TV) to help your mind prepare for sleep. Engage in calming activities like reading or light stretching.</li>
        </ul>
    </li>
    <li><strong>Bedtime (10:00 PM):</strong>
        <ul>
            <li>Establish a consistent bedtime routine to signal your body it's time to sleep. Practice relaxation techniques if needed.</li>
        </ul>
    </li>
</ol>

<h3>Medication Suggestion</h3>
<hr>

<p><strong>CAUTION: THESE ARE TAKEN ONLY IN EMERGENCY</strong><br>
For someone experiencing significant mental health challenges in the struggling phase, medication might be beneficial. Please consult with a psychiatrist or primary care provider for personalized medical advice. Some commonly prescribed medications for moderate mental health conditions include:</p>

<ul>
    <li><strong>Sertraline (Zoloft):</strong>
        <ul>
            <li>Starting dose can be as low as 25 mg per day, with gradual increases under medical supervision.</li>
        </ul>
    </li>
    <li><strong>Escitalopram (Lexapro):</strong>
        <ul>
            <li>Starting dose can be 5 mg per day, with adjustments made as needed.</li>
        </ul>
    </li>
    <li><strong>Venlafaxine (Effexor):</strong>
        <ul>
            <li>Starting dose can be 37.5 mg per day, with increases up to 150 mg per day in divided doses.</li>
        </ul>
    </li>
    <li><strong>Duloxetine (Cymbalta):</strong>
        <ul>
            <li>Starting dose can be 20 mg per day, with increases up to 60 mg per day.</li>
        </ul>
    </li>
    <li><strong>Lorazepam (Ativan):</strong>
        <ul>
            <li>Starting dose can be 0.25 mg to 0.5 mg once or twice daily, as needed for anxiety.</li>
        </ul>
    </li>
    <li><strong>Clonazepam (Klonopin):</strong>
        <ul>
            <li>Starting dose can be 0.125 mg to 0.25 mg twice daily, with increases made cautiously.</li>
        </ul>
    </li>
    <li><strong>Lithium:</strong>
        <ul>
            <li>Starting dose can be 150 mg to 300 mg two to three times daily, with blood level monitoring.</li>
        </ul>
    </li>
    <li><strong>Lamotrigine (Lamictal):</strong>
        <ul>
            <li>Starting dose can be 12.5 mg to 25 mg once daily, with increases made slowly.</li>
        </ul>
    </li>
</ul>

<h3>Final Thoughts</h3>
<hr>

<p>Remember, medication should always be taken under the guidance of a healthcare professional. 
In addition to medication, engaging in regular therapy (such as Cognitive Behavioral Therapy or Dialectical Behavior Therapy) can be highly effective. 
It's essential to seek continuous support from mental health professionals. 
This plan is a starting point, and adjustments may be necessary based on your specific needs and circumstances. 
Your mental health journey is unique, and taking these steps can help you navigate through this challenging phase toward a better state of well-being.</p>
`; document.body.innerHTML = htmlcode4;
            } else if (totalScore >= 859 && totalScore <= 1021) {
                const htmlcode5 = `<p>Based on your score of 859 to 1021 (distressed phase), it indicates that you are experiencing a level of mental health challenges that are impacting your daily life. This score suggests that you might be dealing with moderate to significant stress, anxiety, depression, or other mental health issues that are affecting your overall well-being and functioning. Remember, it's okay to have ups and downs, and reaching out for help is a sign of strength. Keep up the great work!</p>

<p>Our priority is to provide you with supportive and actionable steps to manage your mental health. Here’s a comprehensive plan including daily suggestions and potential medication recommendations for someone experiencing significant mental health challenges:</p>

<h3>Daily Schedule</h3>
<hr>

<h4>Morning Routine:</h4>
<ol>
    <li><strong>Wake Up (7:00 AM):</strong>
        <ul>
            <li>Aim for 7-8 hours of sleep each night.</li>
            <li>Practice deep breathing or a short meditation (5-10 minutes) to start your day calmly.</li>
        </ul>
    </li>
    <li><strong>Breakfast (7:30 AM):</strong>
        <ul>
            <li>Eat a balanced breakfast with protein, whole grains, and fruits. Avoid excessive caffeine and sugar.</li>
        </ul>
    </li>
    <li><strong>Physical Activity (8:00 AM):</strong>
        <ul>
            <li>Engage in 20-30 minutes of physical exercise. This could be a brisk walk, yoga, or any form of exercise you enjoy.</li>
        </ul>
    </li>
    <li><strong>Personal Hygiene (8:30 AM):</strong>
        <ul>
            <li>Take a shower and get dressed in comfortable clothes. Personal hygiene can significantly impact how you feel.</li>
        </ul>
    </li>
</ol>

<h4>Midday Activities:</h4>
<ol start="5">
    <li><strong>Morning Check-In (9:00 AM):</strong>
        <ul>
            <li>Spend a few minutes journaling your thoughts and feelings. Note any specific worries or stressors.</li>
        </ul>
    </li>
    <li><strong>Work or Daily Tasks (9:30 AM - 12:00 PM):</strong>
        <ul>
            <li>Break tasks into manageable chunks. Use a timer (25 minutes of work followed by a 5-minute break) to stay focused.</li>
        </ul>
    </li>
    <li><strong>Lunch (12:00 PM):</strong>
        <ul>
            <li>Eat a nutritious meal. Ensure it includes vegetables, lean protein, and whole grains.</li>
        </ul>
    </li>
    <li><strong>Relaxation (12:30 PM):</strong>
        <ul>
            <li>Take a short walk or practice mindfulness to help recharge.</li>
        </ul>
    </li>
</ol>

<h4>Afternoon Routine:</h4>
<ol start="9">
    <li><strong>Focused Work or Activities (1:00 PM - 3:00 PM):</strong>
        <ul>
            <li>Continue with your tasks, keeping them manageable. Take breaks as needed.</li>
        </ul>
    </li>
    <li><strong>Physical Activity (3:00 PM):</strong>
        <ul>
            <li>Another short session of physical activity, like stretching or a brief walk.</li>
        </ul>
    </li>
    <li><strong>Creative Time (3:30 PM - 5:00 PM):</strong>
        <ul>
            <li>Engage in a hobby or creative activity that you enjoy (drawing, reading, gardening, etc.).</li>
        </ul>
    </li>
</ol>

<h4>Evening Routine:</h4>
<ol start="12">
    <li><strong>Dinner (6:00 PM):</strong>
        <ul>
            <li>Have a balanced and light dinner. Avoid heavy, greasy foods that can disrupt sleep.</li>
        </ul>
    </li>
    <li><strong>Relaxation (7:00 PM):</strong>
        <ul>
            <li>Spend time doing something relaxing, such as listening to music, taking a warm bath, or practicing gentle yoga.</li>
        </ul>
    </li>
    <li><strong>Screen-Free Time (8:00 PM):</strong>
        <ul>
            <li>Avoid screens (phones, computers, TV) to help prepare your mind for sleep. Read a book or engage in a calming activity.</li>
        </ul>
    </li>
    <li><strong>Reflection and Planning (9:00 PM):</strong>
        <ul>
            <li>Reflect on your day and plan for tomorrow. Write down any thoughts or worries to clear your mind before bed.</li>
        </ul>
    </li>
    <li><strong>Bedtime (10:00 PM):</strong>
        <ul>
            <li>Maintain a consistent bedtime routine. Practice relaxation techniques to help you fall asleep.</li>
        </ul>
    </li>
</ol>

<h3>Medication Suggestion</h3>
<hr>

<p><strong>CAUTION: THESE ARE TAKEN ONLY IN EMERGENCY!!!!</strong><br>
For someone experiencing significant mental health challenges, medication can be an important part of treatment. It's crucial to consult with a psychiatrist or primary care provider for personalized medical advice. However, some commonly prescribed medications for severe mental health conditions include:</p>

<h4>Antidepressants:</h4>
<ul>
    <li><strong>Sertraline (Zoloft):</strong>
        <ul>
            <li>Starting dose is usually 50 mg per day, which can be increased gradually under medical supervision.</li>
        </ul>
    </li>
    <li><strong>Escitalopram (Lexapro):</strong>
        <ul>
            <li>Starting dose is typically 10 mg per day, with adjustments made as needed.</li>
        </ul>
    </li>
    <li><strong>Venlafaxine (Effexor):</strong>
        <ul>
            <li>Starting dose is often 37.5 mg per day, with increases up to 225 mg per day in divided doses.</li>
        </ul>
    </li>
    <li><strong>Duloxetine (Cymbalta):</strong>
        <ul>
            <li>Starting dose is usually 30 mg per day, with increases up to 60 mg per day.</li>
        </ul>
    </li>
    <li><strong>Lorazepam (Ativan):</strong>
        <ul>
            <li>Dosage can vary widely based on the severity of anxiety, typically starting at 0.5 mg to 1 mg two to three times daily.</li>
        </ul>
    </li>
    <li><strong>Clonazepam (Klonopin):</strong>
        <ul>
            <li>Starting dose is often 0.25 mg to 0.5 mg twice daily, with increases made cautiously.</li>
        </ul>
    </li>
    <li><strong>Lithium:</strong>
        <ul>
            <li>Starting dose is typically 300 mg to 600 mg two to three times daily, with blood level monitoring.</li>
        </ul>
    </li>
    <li><strong>Lamotrigine (Lamictal):</strong>
        <ul>
            <li>Starting dose varies based on the condition being treated, but it's typically started low (e.g., 25 mg) and increased gradually.</li>
        </ul>
    </li>
</ul>

<h3>Final Thoughts</h3>
<hr>

<p>Remember, medication should always be taken under the guidance of a healthcare professional. Alongside medication, therapy (such as Cognitive Behavioral Therapy or Dialectical Behavior Therapy) can be incredibly effective.</p>

<p>It's important to reach out to mental health professionals for ongoing support. This plan is a starting point, and adjustments may be necessary based on your specific needs and circumstances. Your mental health journey is unique, and taking these steps can lead you toward improved well-being.</p>
`; document.body.innerHTML = htmlcode5;
            } else {
                resultMessage = 'Invalid score.';
            }

            document.getElementById('resultMessage').textContent = resultMessage;
        });
    </script>
</body>

</html>