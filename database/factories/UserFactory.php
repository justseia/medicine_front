<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Ereke',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'image' => 'https://media.istockphoto.com/id/1309328823/photo/headshot-portrait-of-smiling-male-employee-in-office.jpg?b=1&s=170667a&w=0&k=20&c=MRMqc79PuLmQfxJ99fTfGqHL07EDHqHLWg0Tb4rPXQc=',
            'type' => 1,
            'biography' => 'Bob Hall was recovering from yet another surgery in March 2014 when a volunteer walked into his hospital room. It had been a rocky recovery since his lung transplant three months earlier at the William S. Middleton Memorial Veterans Hospital in Madison, Wis. The volunteer wasn’t there to check on his lungs or breathing. Instead, she asked Hall if he wanted to tell his life story. Hall served in the Marine Corps during the Vietnam War. After the war, he had a political career as a Massachusetts legislator, and then led professional associations for 30 years. “I’m anything but a shy guy, and I’m always eager to share details about my life,” Hall said, half-jokingly. Hall, who was 67, spoke to the volunteer for over an hour about everything from his time as a D student in high school (“I tell people I graduated in the top 95% of my class”) to his time in the military (“I thought the Marines were the toughest branch and I wanted to stop the communists”). He finished with the health problems that finally landed him in the hospital, and brought him to the present day. EMAIL SIGN-UP Subscribe to KHNs free Morning Briefing. Your Email Address Your email addresThe interview was part of a program called My Life, My Story. Volunteer writers seek out vets at the hospital like Hall, and ask them all about their lives. Then they write up a thousand-word biography, and go over it with the patient, who can add more details or correct any mistakes. “Of course, being a writer I rewrote the whole thing,” Hall confessed with a smile. When the story is finished, it’s attached to the patient’s electronic record, where a doctor or nurse working anywhere in the Veterans Affairs medical system can read it.  Today more than 2,000 patients at the Madison VA have shared their life stories. Project organizers say it could change the way providers interact with patients. Personalizing Impersonal Medical RecordsClinicians can access a lot of medical data through a patient’s electronic medical record, but there’s nowhere to learn about a patient’s personality or learn about her career, passions or values, said Thor Ringler, who has managed the My Life, My Story project since 2013 “If you were to try to get a sense of someone’s life from that record, it might take you days,” Ringler said. Thor Ringler has run the My Life, My Story program at the Madison VA since 2013. In that time, the program has written the life stories of more than 2,000 veterans at the hospital and placed them in their electronic medical records.(BRAM SABLE-SMITH FOR NPR) The idea for My Life, My Story came from Dr. Elliot Lee, a medical resident who was doing a training rotation at the Madison VA in 2012. The typical rotation for medical residents lasts only about a year, so Lee wanted to find a way to bring new, young doctors up to speed on the VA patients. He wanted a way for them to absorb not just their health histories, but more personal pieces of knowledge. “It seemed to make sense that the patient might know a lot about themselves, and could help provide information to the new doctor,” Lee said. Lee and colleagues tried having patients fill out surveys, which were useful but still left the team wanting more. Next, they tried getting patients to write down their life stories themselves, but not many people really wanted to.Finally, an epiphany: hire a writer to interview patients, and put it all down on paper. It wasn’t hard to find a good candidate: There was a poet in Madison, Thor Ringler, who had just finished his training as a family therapist. He was good at talking to people, and also skilled at condensing big thoughts into concise, meaningful sentences. “I applied for it,” Ringler said. “I was like, ‘Well, of course! I was made for that!',
        ];
    }

    /**
     * Indicate that the models email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
