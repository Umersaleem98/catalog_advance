<style>
    .popular.page_section {
        margin-top: -20px;
    }

    .cookie-card {
        width: 100%;
        padding: 2rem;
        background-color: rgba(255, 255, 255, 0.9); /* Slightly more opaque background */
        box-shadow: 0px 10px 20px rgba(0, 0, 0, .1); /* Softer shadow */
        height: 100%;
        border-radius: 10px; /* Rounded corners for a modern look */
    }

    .title {
        font-weight: 700;
        color: rgb(31, 41, 55);
        font-size: 2rem;
        text-align: center;
        margin-bottom: 1rem;
        font-family: 'Merriweather', serif; /* Use a serif font for a classic look */
    }

    .description {
        margin-top: 1rem;
        font-size: 1rem;
        line-height: 1.6rem;
        color: #444;
        font-weight: 400;
        font-family: 'Open Sans', sans-serif; /* Use a clean sans-serif font */
        text-align: justify;
    }

    @media (min-width: 576px) {
        .description {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
    }

    @media (min-width: 768px) {
        .description {
            font-size: 1.25rem;
            line-height: 2rem;
        }
    }

    @media (min-width: 992px) {
        .description {
            font-size: 1.375rem;
            line-height: 2.25rem;
        }
    }

    .description a {
        color: rgb(59, 130, 246);
        font-weight: bold;
        text-decoration: none;
    }

    .description a:hover {
        text-decoration: underline;
    }

    .actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1rem;
        column-gap: 1rem;
        flex-shrink: 0;
    }

    .pref {
        font-size: 0.875rem;
        line-height: 1.25rem;
        color: rgb(31, 41, 55);
        text-decoration-line: underline;
        transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
        border: none;
        background-color: transparent;
    }

    .pref:hover {
        color: rgb(156, 163, 175);
    }

    .pref:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .accept {
        font-size: 0.875rem;
        line-height: 1.25rem;
        background-color: rgb(17, 24, 39);
        font-weight: 500;
        border-radius: 0.5rem;
        color: #fff;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
        border: none;
        transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .accept:hover {
        background-color: rgb(55, 65, 81);
    }

    .accept:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .img-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .bg-image {
        background-image: url('templates/images/abc.jpg'); /* Replace with your image URL */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        opacity: 0.9;
        padding: 2rem;
        border-radius: 10px;
        color: #fff; /* Ensuring text is visible on the background */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Add a slight text shadow for better readability */
    }

    .text-light {
        color: #f9f9f9;
    }

    .section_title h1 {
        font-family: 'Merriweather', serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 20px;
    }
</style>

<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>A Note of Gratitude</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-stretch">
            <div class="col-lg-12">
                <div class="cookie-card d-flex flex-column">
                    {{-- <h2 class="text-center text-dark title">Thank You</h2> --}}
                    <p class="description p-5 bg-image">
                        While there is no means that we can pay back your kindness, in return, this contribution will offer substantial brand exposure and leave goodwill associated with your name.

                        NUST PLEDGE AND DONOR BILL OF RIGHTS
                        <br>
                        1.	Assure that the gift will be used for the purposes for which it is given
                       <br>
                        2.	Keep the Donor informed of all the details regarding the outstanding dues
                        <br>

                        3.	NUST shall provide the provision to donor to established scholarship under the name of choice.
                        <br>

                        4.	Awardee will be selected by the Need-based Scholarship Award Committee
                        <br>

                        5.	NUST will forward the student details and will transfer the proceeds from the fund to NUST Finance Office for adjustment in the student account. No money will be given directly to the student in any form (cash or cheque)

                        <br>
                       6.	NUST will share students’ progress reports with donors, annually

                       <br>
                       7.	NUST shall offer marketing mileage to the donor on its social media and web handles as a partner

                       <br>
                       8.	NUST shall offer marketing mileage to scholarship established under donor name of choice on social media, donor wall, an invitation to annual donor recognition events, and shoutout on official website
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
