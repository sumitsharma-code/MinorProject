<?php
include("/xampp/htdocs/MinorProject/php/protection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>

    <!-- External CSS files for styling -->
    <link rel="stylesheet" href="./CSS/output.css" />
    <link rel="stylesheet" href="/MinorProject/CSS/index.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <body class="bg-gray-100">
    <!-- Mobile Sidebar and Overlay -->
    <div
      id="mobile-sidebar"
      class="fixed inset-y-0 left-0 z-50 w-64 bg-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-lg"
    >
      <div class="flex flex-col gap-8 h-full px-6 pb-8 pt-6">
        <!-- Company logo -->
        <img
          width="150"
          class="px-4 py-1"
          src="/MinorProject/IMG/Logo.svg"
          alt="Company Logo"
        />

        <!-- Main navigation links -->
        <ul class="flex flex-col gap-3 px-4 py-2">
          <li class="py-4">
            <a
              href="/MinorProject/index.php"
              class="flex gap-4 text-md items-center"
            >
              <img
                src="/MinorProject/Animation/home.gif"
                class="w-7 h-7"
                alt="Dashboard Icon"
              />
              <div class="text-[#1570EF]">Dashboard</div>
            </a>
          </li>
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Inventory.html"
              class="flex gap-4 text-md"
            >
              <img src="/MinorProject/IMG/Invent.svg" alt="Inventory Icon" />
              Inventory
            </a>
          </li>
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Reports.html"
              class="flex gap-4 text-md"
            >
              <img
                width="24"
                src="/MinorProject/IMG/ReportN.svg"
                alt="Reports Icon"
              />
              Reports
            </a>
          </li>
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Suppliers.html"
              class="flex gap-4 text-md"
            >
              <img src="/MinorProject/IMG/Suppliers.svg" alt="Suppliers Icon" />
              Suppliers
            </a>
          </li>
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Orders.html"
              class="flex gap-4 text-md"
            >
              <img src="/MinorProject/IMG/Orders.svg" alt="Orders Icon" />
              Orders
            </a>
          </li>
          <li class="py-4">
            <a href="/MinorProject/Pages/Store.html" class="flex gap-4 text-md">
              <img src="/MinorProject/IMG/Store.svg" alt="Manage Store Icon" />
              Manage Store
            </a>
          </li>
        </ul>

        <!-- Additional navigation links -->
        <ul class="flex flex-col gap-3 px-4 py-2 mt-auto">
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Settings.html"
              class="flex gap-4 text-md"
            >
              <img src="/MinorProject/IMG/Settings.svg" alt="Settings Icon" />
              Settings
            </a>
          </li>
          <li class="py-4">
            <a href="/MinorProject/php/logout.php" class="flex gap-4 text-md">
              <img src="/MinorProject/IMG/LogOut.svg" alt="Log Out Icon" />
              Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Overlay for when mobile sidebar is open -->
    <div
      id="sidebar-overlay"
      class="fixed inset-0 bg-black/50 backdrop-blur-sm bg-opacity-70 z-40 hidden"
    ></div>

    <!-- Main container for the entire page layout -->
    <div class="flex gap-1 max-h-screen">
      <!-- Desktop Navigation bar section -->
      <nav
        class="lg:flex flex-col hidden bg-white rounded-md justify-between px-6 pb-8 pt-6 shadow-md"
        role="navigation"
      >
        <div class="flex flex-col gap-8 w-[280px]">
          <!-- Company logo -->
          <img
            width="150"
            class="px-4 py-1"
            src="/MinorProject/IMG/Logo.svg"
            alt="Company Logo"
          />

          <!-- Main navigation links -->
          <ul class="flex flex-col gap-3 px-4 py-2">
            <li class="py-4">
              <a
                href="/MinorProject/index.php"
                class="flex gap-4 text-md items-center"
              >
                <img
                  src="/MinorProject/Animation/home.gif"
                  class="w-7 h-7"
                  alt="Dashboard Icon"
                />
                <div class="text-[#1570EF]">Dashboard</div>
              </a>
            </li>
            <li class="py-4">
              <a
                href="/MinorProject/Pages/Inventory.html"
                class="flex gap-4 text-md"
              >
                <img src="/MinorProject/IMG/Invent.svg" alt="Inventory Icon" />
                Inventory
              </a>
            </li>
            <li class="py-4">
              <a
                href="/MinorProject/Pages/Reports.html"
                class="flex gap-4 text-md"
              >
                <img
                  width="24"
                  src="/MinorProject/IMG/ReportN.svg"
                  alt="Reports Icon"
                />
                Reports
              </a>
            </li>
            <li class="py-4">
              <a
                href="/MinorProject/Pages/Suppliers.html"
                class="flex gap-4 text-md"
              >
                <img
                  src="/MinorProject/IMG/Suppliers.svg"
                  alt="Suppliers Icon"
                />
                Suppliers
              </a>
            </li>
            <li class="py-4">
              <a
                href="/MinorProject/Pages/Orders.html"
                class="flex gap-4 text-md"
              >
                <img src="/MinorProject/IMG/Orders.svg" alt="Orders Icon" />
                Orders
              </a>
            </li>
            <li class="py-4">
              <a
                href="/MinorProject/Pages/Store.html"
                class="flex gap-4 text-md"
              >
                <img
                  src="/MinorProject/IMG/Store.svg"
                  alt="Manage Store Icon"
                />
                Manage Store
              </a>
            </li>
          </ul>
        </div>

        <!-- Additional navigation links (Settings and Log Out) -->
        <ul class="flex flex-col gap-3 px-4 py-2">
          <li class="py-4">
            <a
              href="/MinorProject/Pages/Settings.html"
              class="flex gap-4 text-md"
            >
              <img src="/MinorProject/IMG/Settings.svg" alt="Settings Icon" />
              Settings
            </a>
          </li>
          <li class="py-4">
            <a href="/MinorProject/php/logout.php" class="flex gap-4 text-md">
              <img src="/MinorProject/IMG/LogOut.svg" alt="Log Out Icon" />
              Log Out
            </a>
          </li>
        </ul>
      </nav>

      <!-- Content section containing search bar and main content -->
      <div class="flex flex-col flex-1 gap-1 overflow-hidden">
        <!-- Search bar section -->
        <div id="search-bar" class="sticky top-0 z-30"></div>

        <!-- Main content section -->
        <main class="flex-1 overflow-y-auto p-1">
          <!-- Container for all main content -->
          <div class="flex flex-col gap-2">
            <!-- First row of main content -->
            <div class="flex flex-col lg:flex-row gap-2">
              <!-- Sales Overview box -->
              <div
                class="bg-white flex flex-col rounded-2xl p-4 w-full lg:w-2/3 shadow-sm"
              >
                <!-- Heading for Sales Overview -->
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Sales Overview
                  </div>
                </div>

                <!-- Content for Sales Overview -->
                <div class="flex flex-row justify-center w-full" dir="ltr">
                  <!-- Container for sales metrics -->
                  <div
                    class="grid grid-cols-2 md:grid-cols-4 divide-x-1 divide-gray-200 w-full"
                  >
                    <!-- Sales metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Sales.svg"
                            alt="Sales Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Sales
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Revenue metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Revenue.svg"
                            alt="Revenue Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Revenue
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Profit metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Profit.svg"
                            alt="Profit Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Profit
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cost metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Cost.svg"
                            alt="Cost Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Cost
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Inventory Summary box -->
              <div
                class="bg-white flex flex-col w-full lg:w-1/3 rounded-2xl p-4 shadow-sm"
              >
                <!-- Heading for Inventory Summary -->
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Inventory Summary
                  </div>
                </div>

                <!-- Content for Inventory Summary -->
                <div class="flex flex-row justify-center w-full" dir="ltr">
                  <!-- Container for inventory metrics -->
                  <div
                    class="grid grid-cols-2 divide-x-1 divide-gray-200 w-full"
                  >
                    <!-- Quantity in Hand metric -->
                    <div class="px-2">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Quantity.svg"
                            alt="Quantity Icon"
                          />
                        </div>
                        <div class="flex flex-col items-center">
                          <div class="text-[#5D6679] font-semibold">0</div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base text-center"
                          >
                            Quantity in Hand
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- To be Received metric -->
                    <div class="px-2">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/On the way.svg"
                            alt="On the Way Icon"
                          />
                        </div>
                        <div class="flex flex-col items-center">
                          <div class="text-[#5D6679] font-semibold">0</div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base text-center"
                          >
                            To be received
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second row of main content -->
            <div class="flex flex-col lg:flex-row gap-2">
              <!-- Purchase Overview box -->
              <div
                class="bg-white flex flex-col rounded-2xl p-4 w-full lg:w-2/3 shadow-sm"
              >
                <!-- Heading for Purchase Overview -->
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Purchase Overview
                  </div>
                </div>

                <!-- Content for Purchase Overview -->
                <div class="flex flex-row justify-center w-full" dir="ltr">
                  <!-- Container for purchase metrics -->
                  <div
                    class="grid grid-cols-2 md:grid-cols-4 divide-x-1 divide-gray-200 w-full"
                  >
                    <!-- Purchase metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Purchase bag.svg"
                            alt="Purchase Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">0</div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Purchase
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cost metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Cost.svg"
                            alt="Cost Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Cost
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cancel metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Cancel.svg"
                            alt="Cancel Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Cancel
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Return metric -->
                    <div class="px-2 my-3 sm:my-0">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/Profit.svg"
                            alt="Return Icon"
                          />
                        </div>
                        <div
                          class="flex flex-col items-center md:flex-row md:gap-2"
                        >
                          <div class="text-[#5D6679] font-semibold">
                            ₹&nbsp;0
                          </div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base"
                          >
                            Return
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Product Summary box -->
              <div
                class="bg-white flex flex-col w-full lg:w-1/3 rounded-2xl p-4 shadow-sm"
              >
                <!-- Heading for Product Summary -->
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Product Summary
                  </div>
                </div>

                <!-- Content for Product Summary -->
                <div class="flex flex-row justify-center w-full" dir="ltr">
                  <!-- Container for product metrics -->
                  <div
                    class="grid grid-cols-2 divide-x-1 divide-gray-200 w-full"
                  >
                    <!-- Number of Suppliers metric -->
                    <div class="px-2">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            class=""
                            src="/MinorProject/IMG/Suppliers.svg"
                            alt="Suppliers Icon"
                          />
                        </div>
                        <div class="flex flex-col items-center">
                          <div class="text-[#5D6679] font-semibold">0</div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base text-center"
                          >
                            Number of Suppliers
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Number of Categories metric -->
                    <div class="px-2">
                      <div class="flex flex-col items-center gap-3">
                        <div>
                          <img
                            src="/MinorProject/IMG/On the way.svg"
                            alt="Categories Icon"
                          />
                        </div>
                        <div class="flex flex-col items-center">
                          <div class="text-[#5D6679] font-semibold">0</div>
                          <div
                            class="text-[#667085] font-medium text-sm md:text-base text-center"
                          >
                            Number of Categories
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Third row of main content -->
            <div class="flex flex-col lg:flex-row gap-2">
              <!-- Sales & Purchase Graph -->
              <div
                class="bg-white flex flex-col rounded-2xl p-4 w-full lg:w-2/3 shadow-sm"
              >
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Sales & Purchase
                  </div>
                </div>
                <div
                  class="flex flex-row justify-center w-full pt-6 pb-4"
                  dir="ltr"
                >
                  <canvas id="acquisitions"></canvas>
                </div>
              </div>

              <!-- Order Summary Graph -->
              <div
                class="bg-white flex flex-col w-full lg:w-1/3 rounded-2xl p-4 shadow-sm"
              >
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Order Summary
                  </div>
                </div>

                <div
                  class="flex flex-col justify-center w-full h-full"
                  dir="ltr"
                >
                  <canvas id="graph2"></canvas>
                  <canvas id="graph3"></canvas>
                </div>
              </div>
            </div>

            <!-- Fourth row of main content -->
            <div class="flex flex-col lg:flex-row gap-2">
              <!-- Top Selling Stock -->
              <div
                class="bg-white flex flex-col rounded-2xl p-4 w-full lg:w-2/3 shadow-sm overflow-x-auto"
              >
                <!-- overview part -->
                <div
                  class="h-17 flex flex-row items-center justify-between mb-4"
                >
                  <div class="text-[#383e49] text-xl font-medium">
                    Top Selling Stock
                  </div>
                  <div class="text-[#0F50AA] text-sm font-medium">See All</div>
                </div>

                <div class="flex flex-col justify-evenly gap-2 min-w-[600px]">
                  <hr class="border-gray-200" />
                  <div
                    class="font-medium flex flex-row justify-between text-[#667085] text-sm"
                  >
                    <div class="w-1/6 px-2">Product</div>
                    <div class="w-1/6 px-2">Product ID</div>
                    <div class="w-1/6 px-2">Category</div>
                    <div class="w-1/6 px-2">Remaining Quantity</div>
                    <div class="w-1/6 px-2">Turn Over</div>
                    <div class="w-1/6 px-2">Increase By</div>
                  </div>
                  <hr class="border-gray-200" />

                  <!-- Product rows -->
                  <div class="flex flex-col gap-2">
                    <!-- Product row 1 -->
                    <div
                      class="text-[#48505E] flex flex-row justify-between text-sm py-2"
                    >
                      <div class="w-1/6 px-2">Tomato</div>
                      <div class="w-1/6 px-2">13561</div>
                      <div class="w-1/6 px-2">Vegetable</div>
                      <div class="w-1/6 px-2 text-[#10A760]">225 kg</div>
                      <div class="w-1/6 px-2">₹26,000</div>
                      <div class="w-1/6 px-2 text-[#10A760]">3.2%</div>
                    </div>
                    <hr class="border-gray-200" />

                    <!-- Product row 2 -->
                    <div
                      class="text-[#48505E] flex flex-row justify-between text-sm py-2"
                    >
                      <div class="w-1/6 px-2">Tomato</div>
                      <div class="w-1/6 px-2">13561</div>
                      <div class="w-1/6 px-2">Vegetable</div>
                      <div class="w-1/6 px-2 text-[#10A760]">225 kg</div>
                      <div class="w-1/6 px-2">₹26,000</div>
                      <div class="w-1/6 px-2 text-[#10A760]">3.2%</div>
                    </div>
                    <hr class="border-gray-200" />

                    <!-- Product row 3 -->
                    <div
                      class="text-[#48505E] flex flex-row justify-between text-sm py-2"
                    >
                      <div class="w-1/6 px-2">Tomato</div>
                      <div class="w-1/6 px-2">13561</div>
                      <div class="w-1/6 px-2">Vegetable</div>
                      <div class="w-1/6 px-2 text-[#10A760]">225 kg</div>
                      <div class="w-1/6 px-2">₹26,000</div>
                      <div class="w-1/6 px-2 text-[#10A760]">3.2%</div>
                    </div>
                    <hr class="border-gray-200" />

                    <!-- Product row 4 -->
                    <div
                      class="text-[#48505E] flex flex-row justify-between text-sm py-2"
                    >
                      <div class="w-1/6 px-2">Tomato</div>
                      <div class="w-1/6 px-2">13561</div>
                      <div class="w-1/6 px-2">Vegetable</div>
                      <div class="w-1/6 px-2 text-[#10A760]">225 kg</div>
                      <div class="w-1/6 px-2">₹26,000</div>
                      <div class="w-1/6 px-2 text-[#10A760]">3.2%</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Low Quantity Stock -->
              <div
                class="bg-white flex flex-col w-full lg:w-1/3 rounded-2xl p-4 shadow-sm"
              >
                <div class="h-17 flex flex-col justify-center mb-4">
                  <div class="text-[#383e49] text-xl font-medium">
                    Low Quantity Stock
                  </div>
                  <div class="text-[#0F50AA] text-sm font-medium">See All</div>
                </div>

                <div class="flex flex-col justify-evenly gap-4">
                  <!-- Product 1 -->
                  <div
                    class="flex flex-row items-center gap-4 p-2 hover:bg-gray-50 rounded-lg"
                  >
                    <div class="w-16 h-16 flex-shrink-0">
                      <img
                        src="/MinorProject/IMG/Products/Tata Salt.svg"
                        alt="Tata Salt"
                        class="w-full h-full object-contain"
                      />
                    </div>
                    <div class="flex-grow">
                      <div class="text-lg font-semibold text-[#383E49]">
                        Tata Salt
                      </div>
                      <div class="text-[#667085] font-medium text-sm">
                        Remaining Quantity: 10 Packet
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <div
                        class="bg-[#FEECEB] flex justify-center items-center py-0.5 px-2 rounded-full text-sm"
                      >
                        Low
                      </div>
                    </div>
                  </div>

                  <!-- Product 2 -->
                  <div
                    class="flex flex-row items-center gap-4 p-2 hover:bg-gray-50 rounded-lg"
                  >
                    <div class="w-16 h-16 flex-shrink-0">
                      <img
                        src="/MinorProject/IMG/Products/Lays.svg"
                        alt="Lays"
                        class="w-full h-full object-contain"
                      />
                    </div>
                    <div class="flex-grow">
                      <div class="text-lg font-semibold text-[#383E49]">
                        Lays
                      </div>
                      <div class="text-[#667085] font-medium text-sm">
                        Remaining Quantity: 14 Packet
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <div
                        class="bg-[#FEECEB] flex justify-center items-center py-0.5 px-2 rounded-full text-sm"
                      >
                        Low
                      </div>
                    </div>
                  </div>

                  <!-- Product 3 -->
                  <div
                    class="flex flex-row items-center gap-4 p-2 hover:bg-gray-50 rounded-lg"
                  >
                    <div class="w-16 h-16 flex-shrink-0">
                      <img
                        src="/MinorProject/IMG/Products/Lays.svg"
                        alt="Lays"
                        class="w-full h-full object-contain"
                      />
                    </div>
                    <div class="flex-grow">
                      <div class="text-lg font-semibold text-[#383E49]">
                        Lays
                      </div>
                      <div class="text-[#667085] font-medium text-sm">
                        Remaining Quantity: 85 Packet
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <div
                        class="bg-[#FEECEB] flex justify-center items-center py-0.5 px-2 rounded-full text-sm"
                      >
                        Low
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script>
      fetch("/MinorProject/Components/Searchbar.html")
        .then((response) => response.text())
        .then((data) => {
          document.getElementById("search-bar").innerHTML = data;

          // Add event listener after search bar is loaded
          document
            .getElementById("hamburger-menu")
            .addEventListener("click", function () {
              const sidebar = document.getElementById("mobile-sidebar");
              const overlay = document.getElementById("sidebar-overlay");

              sidebar.classList.toggle("-translate-x-full");
              overlay.classList.toggle("hidden");

              // Close sidebar when clicking on overlay
              overlay.addEventListener("click", function () {
                sidebar.classList.add("-translate-x-full");
                overlay.classList.add("hidden");
              });
            });
        })
        .catch((error) => {
          console.error("Error loading search bar:", error);
        });

      (function () {
        const data = [
          { month: "Jan", Purchase: 55000, Sales: 48000 },
          { month: "Feb", Purchase: 58000, Sales: 46000 },
          { month: "Mar", Purchase: 41000, Sales: 50000 },
          { month: "Apr", Purchase: 35000, Sales: 40000 },
          { month: "May", Purchase: 40000, Sales: 43000 },
          { month: "Jun", Purchase: 28000, Sales: 39000 },
          { month: "Jul", Purchase: 54000, Sales: 30000 },
          { month: "Aug", Purchase: 34000, Sales: 25000 },
          { month: "Sep", Purchase: 44000, Sales: 51000 },
          { month: "Oct", Purchase: 34000, Sales: 18000 },
          { month: "Nov", Purchase: 34000, Sales: 22000 },
          { month: "Dec", Purchase: 34000, Sales: 35000 },
        ];

        const data2 = [
          { month: "Jan", Ordered: 3800, Delivered: 2000 },
          { month: "Feb", Ordered: 1500, Delivered: 2200 },
          { month: "Mar", Ordered: 2500, Delivered: 3100 },
          { month: "Apr", Ordered: 2100, Delivered: 2800 },
          { month: "May", Ordered: 2400, Delivered: 2600 },
          { month: "Jun", Ordered: 1300, Delivered: 1800 },
        ];

        new Chart(document.getElementById("graph2"), {
          type: "line",
          data: {
            labels: data2.map((row) => row.month),
            datasets: [
              {
                tension: 0.4,
                label: "Ordered",
                data: data2.map((row) => row.Ordered),
                backgroundColor: "rgba(255, 215, 0, 0.2)", // Blue
                borderColor: "rgb(255, 215, 0)",
                borderWidth: 2,
                fill: true,
                pointRadius: 0,
              },
            ],
          },
          options: {
            // responsive: true,
            scales: {
              y: {
                min: 1000,
                grid: {
                  display: false,
                },
                max: 4000,
                ticks: {
                  stepSize: 1000,
                },
              },
            },
            plugins: {
              legend: {
                position: "bottom",
                labels: {
                  usePointStyle: true,
                  pointStyle: "circle",
                },
              },
            },
          },
        });
        new Chart(document.getElementById("graph3"), {
          type: "line",
          data: {
            labels: data2.map((row) => row.month),
            datasets: [
              {
                tension: 0.4,
                label: "Delivered",
                data: data2.map((row) => row.Delivered),
                borderColor: "rgba(54, 162, 235, 1)",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderWidth: 2,
                fill: true,
                pointRadius: 0,
              },
            ],
          },
          options: {
            // responsive: true,
            scales: {
              y: {
                min: 1000,
                grid: {
                  display: false,
                },
                max: 4000,
                ticks: {
                  stepSize: 1000,
                },
              },
            },
            plugins: {
              legend: {
                position: "bottom",
                labels: {
                  usePointStyle: true,
                  pointStyle: "circle",
                },
              },
            },
          },
        });

        new Chart(document.getElementById("acquisitions"), {
          type: "bar",
          data: {
            labels: data.map((row) => row.month),
            datasets: [
              {
                barThickness: 20,
                label: "Purchase",
                borderRadius: 10,
                data: data.map((row) => row.Purchase),
                backgroundColor: "rgba(54, 162, 235, 0.6)", // Blue
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 1,
                innerWidth: 1,
              },

              {
                barThickness: 20,
                label: "Sales",
                borderRadius: 10,
                data: data.map((row) => row.Sales),
                backgroundColor: "rgba(255, 99, 132, 0.6)", // Red
                borderColor: "rgba(255, 99, 132, 1)",
                borderWidth: 1,
              },
            ],
          },
          options: {
            responsive: true,
            scales: {
              y: {
                min: 10000,
                grid: {
                  display: false,
                },
                max: 60000,
                ticks: {
                  stepSize: 10000,
                },
              },
            },
            plugins: {
              legend: {
                position: "bottom",
                labels: {
                  usePointStyle: true,
                  pointStyle: "circle",
                },
              },
            },
          },
        });
      })();
    </script>
  </body>
</html>
