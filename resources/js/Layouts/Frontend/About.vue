<template>
    <div id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-24">
                <img
                    class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                    src="/images/about.jpg"
                    alt="about"
                />
                <div
                    class="flex flex-col items-center text-center lg:items-start lg:text-left"
                >
                    <div class="flex flex-col">
                        <h2
                            class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3"
                        >
                            About me
                        </h2>
                        <p class="mb-4 text-accent">Backend web developer</p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8">
                            Lorem ipsum dolor sit amet consectetur
                        </p>
                    </div>
                    <a
                        href="#contact"
                        class="btn btn-md bg-accent text-slate-200"
                    >
                        Contact me
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
