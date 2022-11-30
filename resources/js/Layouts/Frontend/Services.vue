<script setup></script>
<template>
    <section
        id="services"
        class="section bg-light-secondary dark:bg-dark-secondary"
    >
        <div
            class="container mx-auto"
            v-motion
            :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0 }"
        >
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">What I do for clients</h2>
                <p class="subtitle">Lorem ipsum labore nisium</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <div
                    class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl"
                >
                    <div
                        class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                            />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web design</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odio perferendis volm quibsdam ullam qui dolor
                    </p>
                </div>
                <div
                    class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl"
                >
                    <div
                        class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Development</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odio perferendis volm quibsdam ullam qui dolor
                    </p>
                </div>
                <div
                    class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl"
                >
                    <div
                        class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"
                            />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Branding</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odio perferendis volm quibsdam ullam qui dolor
                    </p>
                </div>
                <div
                    class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl"
                >
                    <div
                        class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 6h.008v.008H6V6z"
                            />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">SEO</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odio perferendis volm quibsdam ullam qui dolor
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
