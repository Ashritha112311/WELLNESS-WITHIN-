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
                const htmlcode = `
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